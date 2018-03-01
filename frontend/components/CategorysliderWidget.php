<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */

use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class CategorysliderWidget extends Widget
{
    public $category_id;

    public function init()
    {
        parent::init();
        if ($this->category_id === null) {
            $this->category_id = -1;
        }
    }

    public function run()
    {
        $category = Category::findOne($this->category_id);
        $products = Product::find()->category($this->category_id)->orderBy('id DESC')->all();
        return $this->render('categoryslider',compact('products','category'));
    }
}