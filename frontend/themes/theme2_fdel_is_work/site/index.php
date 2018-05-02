<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use app\components\ShowPriceext;
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
    <!--category menu-->
    <ul class="nav nav-pills nav-justified">
    <?php  foreach ($top_menu_to_slider_widget_bottom as $item) {
         //yii::error($item);  ?>
        <li ><a class="scroll_to" href="#menu_<?=$item['cat_id']?>"><?=$item['name']?></a></li>
    <?php     }  ?>
    </ul>






    <!--week menu-->
    <div class="wrap_week_menu">
        <ul class="week_menu week_menu1">
            <li class="disabled"><a href="#"><div class="week_name">Понедельник</div><span class="week_time">29 января</span></a></li>
            <li class="active"><a href="#"><div class="week_name">Вторник</div><span class="week_time">29 января</span></a></li>
            <li><a href="#"><div class="week_name">Среда</div><span class="week_time">29 января</span></a></li>
            <li><a href="#"><div class="week_name">Четверг</div><span class="week_time">29 января</span></a></li>
            <li><a href="#"><div class="week_name">Пятница</div><span class="week_time">29 января</span></a></li>
            <li><a href="#"><div class="week_name">Суббота</div><span class="week_time">29 января</span></a></li>
            <li><a href="#"><div class="week_name">Воскресенье</div><span class="week_time">29 января</span></a></li>


        </ul>
        <ul class="week_menu week_menu2 red">
            <li class="pdf_week"><a href="#"><div class="week_name">Меню в pdf</div><span class="week_time"></span></a></li>
            <li class="next_week"><a href="#"><div class="week_name">&#8594;</div><span class="week_time">следующая неделя</span></a></li>

        </ul>
    </div>


    <div class="clearfix"></div>




    <!--   новое меню комплексов   s  -->

    <!--   новое меню комплексов    e  -->

    <!--   cтарое меню комплексов   s  -->
    <div class="food_block">
        <?php Pjax::begin(); ?>
        <div class="food_area">
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <h2>Комплексные обеды</h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>
            <div class="food_block">
            <?php
            foreach ($productsext as $item) { //yii::error($item); ?>
                <div class="food yellow">
                    <a href="<?=Url::to(['site/index', 'id' => $item->id])?>">  <img src="<?=$item->getImage()->getUrl('278x247');?>" alt="food"> </a>
                    <div class="caption">
                        <h4>   <?= Html::a($item->name, [Url::to(['site/index', 'id' => $item->id])], ['class' => '']) ?></h4>
                        <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0,'text'=>'']);?>
                        <div class="short_desc text-center">
                                <p>
                                    <?=$item->short_text?>
                                </p>
                        </div>


                        <div class="price text-center">
                            <?=ShowPriceext::widget(['model' => $item]);?> грн.
                        </div>
                        <div class="order text-center">
                            <?=BuyButton::widget(['model' => $item,'text'=>'Заказать']);?>
                        </div>

                    </div>
                </div>


             <?php  } ?>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <!--order complex  смена пжак-->
        <?= ExtendproductWidget::widget(['product_id' => $active_id_complex]) ?>
        <?php Pjax::end(); ?>





        <div class="clearfix"></div>



        <div class="clearfix"></div>




        <!--      widget area bottom-->
        <?php  foreach ($top_menu_to_slider_widget_bottom as $item) {
            //yii::error($item);    ?>
            <div class="stisky_ankor" id="menu_<?=$item['cat_id']?>"></div>
            <?= CategorysliderWidget::widget(['category_id' => $item['cat_id']]) ?>
            <div class="clearfix"></div>
        <?php     }  ?>

        <!--      $top_menu_to_slider_widget_bottom           Салаты-->


        <!-- Первые блюда-->
        <div class="clearfix"></div>
        <?php // CategorysliderWidget::widget(['category_id' => 5]) ?>

        <div class="clearfix"></div>
        <?php // CategorysliderWidget::widget(['category_id' => 5]) ?>



        <!--                Вторые блюда-->

        <div class="clearfix"></div>






        <!--                Гарниры-->
        <div class="clearfix"></div>





        <!--                Выпечка-->
        <div class="clearfix"></div>





        <!--                Напитки и Десерты-->
        <div class="clearfix"></div>






    </div>
    <!--   cтарое меню комплексов   e  -->






</div>




<div class="clearfix"></div>


<!--в продакшене удалить-->

