<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use frontend\assets\MainpageAsset;
use frontend\assets\TempAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use dvizh\shop\models\Category;
use dvizh\shop\widgets\ShowPrice;
use dvizh\filter\widgets\FilterPanel;
use dvizh\field\widgets\Show;
use dvizh\cart\widgets\ElementsList;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\BuyButton;
use dvizh\order\widgets\OrderForm;
use dvizh\promocode\widgets\Enter;
use dvizh\certificate\widgets\CertificateWidget;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Быстрая доставка еды';
MainpageAsset::register($this);


//TempAsset2::register($this);
?>

<div class="col-sm-12 main">




    <div class="clearfix"></div>

    <br><br><br>

    <div class="food_block">

        <div class="col-sm-12 text-center" style="min-height: 250px;">
            <section>
                <p>Извините по даному запросу ничего не найдено</p>
                <p>Может вы найдете что-то вкусненькое</p>
                в <br>
                <h3 class="nice"> <a href="/" > нашем меню</a> </h3>
            </section>
        </div>

        <!--                Салаты-->
        <?php CategorysliderWidget::widget(['category_id' => 3]) ?>



        <div class="clearfix"></div>
        <?= CategorysliderWidget::widget(['category_id' => 5]) ?>



        <!--                Напитки и Десерты-->
        <div class="clearfix"></div>






    </div>







</div>




<div class="clearfix"></div>

