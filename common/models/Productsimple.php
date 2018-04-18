<?php
namespace common\models;

use dvizh\shop\models\Product;
use Yii;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use dvizh\shop\models\product\ProductQuery;

class Productsimple extends Product
{
    function behaviors()
    {
        return [
            'images' => [
                'class' => 'common\behaviors\AttachImagesext',
                'mode' => 'gallery',
            ],
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
            ],
            'relations' => [
                'class' => 'dvizh\relations\behaviors\AttachRelations',
                'relatedModel' => 'dvizh\shop\models\Product',
//                'relatedModel' => 'common\models\Productsimple',
                'inAttribute' => 'related_ids',
            ],
            'toCategory' => [
                'class' => 'voskobovich\manytomany\ManyToManyBehavior',
                'relations' => [
                    'category_ids' => 'categories',
                ],
            ],
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
            'filter' => [
                'class' => 'dvizh\filter\behaviors\AttachFilterValues',
            ],
            'field' => [
                'class' => 'dvizh\field\behaviors\AttachFields',
            ],
        ];
    }


    public function getPriceext($type = null)
    {
        // yii::error(['in exr prod getprice',$this->related_ids,$this->getRelations()->all()]);
        $session = Yii::$app->session;
        $ext_prod = $session->get('prodext');

        $price=  $this->getPrice();
        if (!is_null($this->getRelations())){
            foreach ($this->getRelations()->all() as $rel) {
//             yii::error(['in exr prod getprice',$rel->id]);
                if($pr = $rel->getPriceModel($type)) {
                    if (isset($ext_prod[$rel->id])){
                        if ($ext_prod[$rel->id]['count']<=0){$ext_prod[$rel->id]['count']=1;}
                        $price+=( $pr->price * $ext_prod[$rel->id]['count']);
                    }else{
                        $price+= $pr->price;
                    }
                }
                // $price+=$rel->price;
            }
        }


        return $price;

    }


    /**
     * @param null $type
     * @return array|int|null|\yii\db\ActiveRecord      цена только из модификаторов
     */
    public function getPrice($type = null)
    {

        if($callable = yii::$app->getModule('shop')->priceCallable) {
            return $callable($this);
        }

$price=0;
        // установка опционых цен
        // возможны баги с порядком
        foreach($this->getModifications()->andWhere(['available' => 'yes'])->all() as $modification) {
                                 if (!empty($modification->price)){
                                     $price=$modification->price;
                                 }else{
                                     $price=0;
                                 }
        }

        return $price;

    }

}
