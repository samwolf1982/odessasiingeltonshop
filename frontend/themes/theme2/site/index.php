<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use frontend\assets\MainpageAsset;
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
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Модули Dvizh999';
MainpageAsset::register($this);
?>

<div class="col-sm-12 main">
    <!--category menu-->
    <ul class="nav nav-pills nav-justified">
        <li ><a href="/">салаты</a></li>
        <li><a href="/">первые блюда</a></li>
        <li><a href="/index2.php">вторые блюда</a></li>
        <li><a href="#">гарниры</a></li>
        <li><a href="#">выпечка</a></li>
        <li><a href="#">напитки и десерты</a></li>
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
            <li class="pdf_week"><a href="#"><div class="week_name">Меню в pdf</div><span class="week_time">на текущую / на следующую неделю</span></a></li>
            <li class="next_week"><a href="#"><div class="week_name">&#8594;</div><span class="week_time">следующая неделя</span></a></li>

        </ul>
    </div>


    <div class="clearfix"></div>



    <div class="food_block">
        <?php Pjax::begin(); ?>
        <div class="food_area">
            <div class="food_block">
            <?php
            foreach ($productsext as $item) { //yii::error($item); ?>
                <div class="food yellow">
                    <img src="<?=$item->getImage()->getUrl('278x247');?>" alt="food">
                    <div class="caption">

                        <h4>   <?= Html::a($item->name, [Url::to(['site/index', 'id' => $item->id])], ['class' => '']) ?></h4>
                        <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0,'text'=>'количество:']);?>
                        <div class="short_desc text-center">
                            <p>
                                Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                            </p>

                        </div>

                        <div class="price text-center">
                            <?=ShowPrice::widget(['model' => $item]);?> грн
                        </div>
                        <div class="order text-center">
<!--                            <button type="button" class="btn btn-success">Заказать</button>-->
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
                foreach (range(1,10) as $item) { ?>
                    <div class="food yellow">
                        <img src="/images/food1.png" alt="food">
                        <div class="caption">
                            <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                            <div class="input-group">
                                <span class="count_food_text">количество: </span>
                                <span class="input-group-addon  input-group-addon_f"></span>
                                <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon input-group-addon_l"></span>
                            </div>


                            <div class="short_desc text-center">
                                <p>
                                    Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                </p>

                            </div>

                            <div class="price text-center">
                                130 грн
                            </div>
                            <div class="order text-center">
                                <button type="button" class="btn btn-success">Заказать</button>
                            </div>

                        </div>
                    </div>
                <?php }  ?>

            </div>
            <div class="clearfix"></div>


        </div>


        <!--order complex-->
        <div class="food_area">

            <div class="clearfix"></div>

            <div class="food_block food_block_order ">

                <div class="order_area">
                    <div class="food food_clear yellow">
                        <div class="caption">
                            <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>
                            <hr>

                            <div class="input-group wrap_count_complex_order">
                                <span class="count_food_text">количество: </span>
                                <span class="input-group-addon  input-group-addon_f"></span>
                                <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon input-group-addon_l"></span>
                            </div>
                            <hr>

                            <div class="price">
                                130 грн
                            </div>
                            <div class=" order text-center">
                                <button type="button" class="btn btn-success">Заказать</button>
                            </div>

                            <ul class="order_complex_list">
                                <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>

                            </ul>



                        </div>
                    </div>
                </div>

                <div class="wrap_food">
                    <?php
                    foreach (range(1,8) as $item) { ?>
                        <div class="food yellow">
                            <img src="/images/food1.png" alt="food">
                            <div class="caption">
                                <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                <div class="input-group">
                                    <span class="count_food_text">количество: </span>
                                    <span class="input-group-addon  input-group-addon_f"></span>
                                    <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-addon input-group-addon_l"></span>
                                </div>


                                <div class="short_desc text-center">
                                    <p>
                                        Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                    </p>

                                </div>

                                <div class="price text-center">
                                    130 грн
                                </div>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
            </div>
            <div class="clearfix"></div>


        </div>






        <div class="clearfix"></div>

        <!--                Салаты-->
        <?= CategorysliderWidget::widget(['category_id' => 3]) ?>

        <!-- Первые блюда-->
        <div class="clearfix"></div>
        <?= CategorysliderWidget::widget(['category_id' => 5]) ?>



        <!--                Вторые блюда-->

        <div class="clearfix"></div>






        <!--                Гарниры-->
        <div class="clearfix"></div>





        <!--                Выпечка-->
        <div class="clearfix"></div>





        <!--                Напитки и Десерты-->
        <div class="clearfix"></div>






    </div>







</div>




<div class="clearfix"></div>

<!--в продакшене удалить-->
<div class="site-index hidden">

    <div class="jumbotron">
        <h1>Во дела</h1>

        <p class="lead">Ниже представлены некоторые важные виджеты. Они работают сообща, хоть и являются частью разных модулей.</p>
    </div>

    <?php if(!$categories) { ?>
        <p>Заполните категории и товары в <a href="<?=Url::toRoute(['/backend/web/']);?>">админке</a>.</p>
    <?php } else { ?>
        <div class="body-content">

            <h2>1. Выберите категорию</h2>
            <ul class="nav nav-pills">
                <?php foreach($categories as $cat) { ?>
                    <li <?php if($cat->id == $category->id) echo 'class="active"';?>><a href="<?=Url::toRoute(['/site/index', 'categoryId' => $cat->id]);?>"><?=$cat->name;?></a></li>
                <?php } ?>
            </ul>

            <h2>2. Отфильтруйте товар</h2>
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend>dvizh\filter\widgets\FilterPanel</legend>
                        <div>
                            <?=FilterPanel::widget(['itemId' => $category->id, 'findModel' => $queryForFilter, 'ajaxLoad' => true, 'resultHtmlSelector' => '#productsList']); ?>
                        </div>
                    </fieldset>
                </div>
            </div>

            <h2>3. Положите в корзину товар</h2>
            <div class="row" id="productsList">
                <?php // yii::error($products); ?>
                <?php foreach($products as $product) { ?>
                    <div class="col-md-6 product-block">
                        <figure>
                            <img src="<?=$product->getImage()->getUrl('200x200');?>" alt="<?=$product->name;?>" />
                        </figure>
                        <h3><?=$product->name;?></h3>

                        <fieldset>
                            <legend>dvizh\field\widgets\Show</legend>
                            <div>
                                <?=Show::widget(['model' => $product]);?>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>dvizh\shop\widgets\ShowPrice</legend>
                            <div>
                                <?=ShowPrice::widget(['model' => $product]);?> р.
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>dvizh\cart\widgets\ChangeOptions</legend>
                            <div>
                                <?=ChangeOptions::widget(['model' => $product]);?>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>dvizh\cart\widgets\ChangeCount</legend>
                            <div>
                                <?=ChangeCount::widget(['model' => $product]);?>
                            </div>
                        </fieldset>
                        
                        <fieldset>
                            <legend>dvizh\cart\widgets\BuyButton</legend>
                            <div>
                                <?=BuyButton::widget(['model' => $product]);?>
                            </div>
                        </fieldset>

                    </div>
                <?php } ?>
            </div>

            <h2>4. Проверьте корзину</h2>
            <fieldset>
                <legend>dvizh\cart\widgets\ElementsList</legend>
                <div>
                    <?=ElementsList::widget();?>
                </div>
            </fieldset>

            <fieldset>
                <legend>dvizh\cart\widgets\CartInformer</legend>
                <div>
                    <?=CartInformer::widget();?>
                </div>
            </fieldset>
            
            <fieldset>
                <legend>dvizh\cart\widgets\TruncateButton</legend>
                <div>
                    <?=TruncateButton::widget();?>
                </div>
            </fieldset>

            <h2>5. Воспользуйтесь маркетингом</h2>

            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <legend>dvizh\promocode\widgets\Enter</legend>
                        <div>
                            <?=Enter::widget();?>
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6">
                    <fieldset>
                        <legend>dvizh\certificate\widgets\CertificateWidget</legend>
                        <div>
                            <?=CertificateWidget::widget();?>
                        </div>
                    </fieldset>
                </div>
            </div>

            <h2>6. Совершите заказ</h2>
            <fieldset>
                <legend>dvizh\order\widgets\OrderForm</legend>
                <div>
                    <?=OrderFormExt::widget();?>
                </div>
            </fieldset>

        </div>
    <?php } ?>
</div>
