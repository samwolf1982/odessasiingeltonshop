<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */

use common\models\Productext;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use yii\base\Widget;
use yii\helpers\Html;
use Yii;

class ExtendproductWidget extends Widget
{
    public $product_id;

    public function init()
    {
        parent::init();
        if ($this->product_id === null) {
            $this->product_id = 0;
        }
    }

    public function run()
    {
        $product= Productext::find()->where(['id'=>$this->product_id])->one();
        return $this->render('extendproduct',compact('product'));
    }
}