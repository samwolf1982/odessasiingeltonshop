<?php
namespace common\behaviors;

use dvizh\gallery\behaviors\AttachImages;
use yii;
use yii\base\Behavior;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use dvizh\gallery\models;
use yii\helpers\BaseFileHelper;
use dvizh\gallery\ModuleTrait;
use dvizh\gallery\models\Image;
use dvizh\gallery\models\PlaceHolder;

class AttachImagesext extends AttachImages
{

    public function getImages()
    {
        $finder = $this->getImagesFinder();
        $imageQuery = Image::find()->where($finder);
        $imageQuery->orderBy(['isMain' => SORT_DESC,'sort' => SORT_DESC, 'id' => SORT_ASC]);
        $imageRecords = $imageQuery->all();
        if(!$imageRecords){
            return [$this->getModule()->getPlaceHolder()];
        }

        return $imageRecords;
    }

    public function getImage()
    {
        $finder = $this->getImagesFinder(['modelName'=>'Product']);
       // yii::error($finder);
        $imageQuery = Image::find()->where($finder);
        $imageQuery->orderBy(['isMain' => SORT_DESC,'sort' => SORT_DESC, 'id' => SORT_ASC]);
        $img = $imageQuery->one();

        if(!$img){
            return $this->getModule()->getPlaceHolder();
        }

        return $img;
    }

    public function getImageByName($name)
    {
        if ($this->getModule()->className === null) {
            $imageQuery = Image::find();
        } else {
            $class = $this->getModule()->className;
            $imageQuery = $class::find();
        }

        $finder = $this->getImagesFinder(['name' => $name]);
        $imageQuery->where($finder);
        $imageQuery->orderBy(['isMain' => SORT_DESC, 'id' => SORT_ASC]);
        $img = $imageQuery->one();

        if(!$img){
            return $this->getModule()->getPlaceHolder();
        }

        return $img;
    }

    public function removeImages()
    {
        $images = $this->owner->getImages();

        if (count($images) < 1) {
            return true;
        } else {
            foreach ($images as $image) {
                $this->owner->removeImage($image);
            }
        }
    }

    public function removeImage(Image $img)
    {
        $img->clearCache();

        $storePath = $this->getModule()->getStorePath();
        $fileToRemove = $storePath . DIRECTORY_SEPARATOR . $img->filePath;

        if (preg_match('@\.@', $fileToRemove) and is_file($fileToRemove)) {
            unlink($fileToRemove);
        }

        $img->delete();
    }

    private function getImagesFinder($additionWhere = false)
    {
        $base = [
            'itemId' => $this->owner->id,
            'modelName' => $this->getModule()->getShortClass($this->owner),
			'gallery_id' => $this->galleryId
        ];

        if ($additionWhere) {
            $base = \yii\helpers\BaseArrayHelper::merge($base, $additionWhere);
        }

        return $base;
    }

    private function getAliasString()
    {
        if ($this->createAliasMethod) {
            $string = $this->owner->{$this->createAliasMethod}();
            if (!is_string($string)) {
                throw new \Exception("Image's url must be string!");
            } else {
                return $string;
            }

        } else {
            return substr(md5(microtime()), 0, 10);
        }
    }

    private function getAlias()
    {
        $aliasWords = $this->getAliasString();
        $imagesCount = count($this->owner->getImages());

        return $aliasWords . '-' . intval($imagesCount + 1);
    }

    public function getGalleryMode()
    {
        return $this->mode;
    }

    public function getInputName()
    {
        return $this->inputName;
    }

    public function setImages($event)
    {
        $userImages = UploadedFile::getInstancesByName($this->getInputName());

        if ($userImages && $this->doResetImages) {
            foreach ($userImages as $file) {
                if(in_array(strtolower($file->extension), $this->allowExtensions)) {

                    if (!file_exists($this->uploadsPath)){
                        mkdir($this->uploadsPath, 0777, true);
                    }

                    $file->saveAs("{$this->uploadsPath}/{$file->baseName}.{$file->extension}");

                    if($this->owner->getGalleryMode() == 'single') {
                        foreach($this->owner->getImages() as $image) {
                            $image->delete();
                        }
                    }

                    $this->attachImage("{$this->uploadsPath}/{$file->baseName}.{$file->extension}");
                }
            }

            $this->doResetImages = false;
        }

        return $this;
    }

    public function hasImage()
    {
        return ($this->getImage() instanceof PlaceHolder) ? false : true;
    }
}