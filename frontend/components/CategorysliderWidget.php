<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */

use common\models\Productext;
use common\models\Productsimple;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class CategorysliderWidget extends Widget
{
    public $category_id;
    public $w;
    public $h;
    public $show_desc=false;
    public $title;
    public $is_rel;

    public function init(){

//'w'=>'278','h'=>"447"
        parent::init();
        if ($this->category_id === null) {
            $this->category_id = -1;
        }
        if ($this->title === null) {
            $this->title =false;
        }
        if ($this->w === null) {
            $this->w ='278';
        }
            if ($this->h === null) {
                $this->h ='247';
                                    }
        if ($this->is_rel === null) {
            $this->is_rel =false;
        }
    }

    public function run()
    {

        if (empty( $this->is_rel)){    // если обычная категория
            $category = Category::findOne($this->category_id);
            // $products = Product::find()->category($this->category_id)->orderBy('id DESC')->all();
            $products = Productsimple::find()->where(['category_id'=> $this->category_id])->orderBy('id DESC')->all();
            //  yii::error(['wii'=>$products]);
            $w=$this->w;
            $h=$this->h;
            $title=$this->title;
        }else{

            $product=$this->category_id;
            if($product->relations){

            }
            if(is_null($product->getRelations())){
                $products=[];
                $products = Productsimple::find()->where(['category_id'=> $this->category_id])->orderBy('id DESC')->all();
            }else{
                $products=$product->getRelations()->all();
            }
            //$products=$product->relations;
            // yii::error($products);
            if (empty($products)){
                $products=[];
            }


            $category = Category::findOne($this->category_id);
            $w=$this->w;
            $h=$this->h;
            $title=$this->title;
        }
        $class_name_def='common\models\Productsimple';


        return $this->render('categoryslider',compact('products','category','w','h','show_desc','title','class_name_def'));
    }
}