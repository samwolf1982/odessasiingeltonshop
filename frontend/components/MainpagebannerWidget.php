<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */


use common\models\Slider;

use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class MainpagebannerWidget extends Widget
{
    public $slider_id;
//    public $w;
//    public $h;
//    public $show_desc=false;
//    public $title;
//    public $is_rel;

    public function init(){

        parent::init();
        if ($this->slider_id === null) {
            $this->slider_id = -1;
        }

    }

    public function run()
    {


$slider=Slider::find()->where(['id'=>$this->slider_id])->one();


yii::error([$slider->getField('dop-pole-dla-bannera-na-glavnoj')]);
//yii::error([$slider->field->getFields()]);


//        if (empty( $this->is_rel)){    // если обычная категория
//            $category = Category::findOne($this->category_id);
//            // $products = Product::find()->category($this->category_id)->orderBy('id DESC')->all();
//            $products = Productsimple::find()->where(['category_id'=> $this->category_id])->orderBy('id DESC')->all();
//            //  yii::error(['wii'=>$products]);
//            $w=$this->w;
//            $h=$this->h;
//            $title=$this->title;
//        }else{
//
//            $product=$this->category_id;
//            if($product->relations){
//
//            }
//            if(is_null($product->getRelations())){
//                $products=[];
//                $products = Productsimple::find()->where(['category_id'=> $this->category_id])->orderBy('id DESC')->all();
//            }else{
//                $products=$product->getRelations()->all();
//            }
//            //$products=$product->relations;
//            // yii::error($products);
//            if (empty($products)){
//                $products=[];
//            }
//
//
//            $category = Category::findOne($this->category_id);
//            $w=$this->w;
//            $h=$this->h;
//            $title=$this->title;
//        }
//        $class_name_def='common\models\Productsimple';
        return $this->render('mainpagebanner',compact('slider'));
    }
}