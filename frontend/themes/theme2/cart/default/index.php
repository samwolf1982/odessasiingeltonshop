<?php

use app\components\CartInformerExt;
use app\components\ChangeCountExt;
use app\components\DeliveryInformer;
use app\components\TotalPayExtInformer;
use app\components\TotalPayInformer;
use dvizh\cart\widgets\DeleteButton;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\order\widgets\OrderForm;

use frontend\assets\CartAsset;
use frontend\assets\TempAsset;

$this->title = yii::t('cart', 'Cart');


$this->registerCssFile('/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
$this->registerJsFile('/js/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

$this->registerJsFile('js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
$this->registerJsFile('js/lazy/jquery.lazy.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
$this->registerJsFile('js/cartinitial.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

$this->registerCssFile('/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

CartAsset::register($this);

//TempAsset::register($this);

?>



        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Комплексные обеды</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Оформление  заказа</li>
                </ol>
            </nav>
        </div>

        <div class="col-sm-12  main">

            <div class="col-sm-12 col-md-6 left_cart">
                <div class="food_block2">
                    <div class="wrp_info_select_day">
                        <div class="nice">Babooshka</div>
                        <div class="add_day">
                            <div class="pull-left">
                                Ваш заказ
                            </div>
                            <div class="pull-right">
                                <a href="#" class="plus_btn btn"><div >+</div></a>   <span class= >добавить день</span>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="select_day">
                        <div class="under_select_day">
                            <div class="owl-carousel owl-theme food_block">
                                <?php  foreach (range(1,7)  as $key=> $item) { ?>
                                    <div class="food ">
                                        <button type="button" class="btn btn-success  <?= $key!=0 ? 'inactive':''?>">27.01.2018</button>
                                    </div>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>
                    <hr class="clear_hr">
                    <div class="clearfix"></div>


                    <div class="food_area">
                        <div class="food_block">
                            <div class="wrp_product_cart">
                                <h1><?= yii::t('cart', 'Cart'); ?></h1>
                                <?php foreach($elements as $element) { ?>
                                        <div class="col-lg-6 col-xs-6">
                                            <strong><?=$element->getModel()->getCartName();?> ( <?=$element->getPrice();?> грн.)</strong>
                                            <?=ChangeOptions::widget(['model' => $element, 'type' => 'radio']); ?>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 food">
                                            <?=ChangeCountExt::widget(['model' => $element,'parent_id'=>0]);?>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <?=DeleteButton::widget(['model' => $element, 'lineSelector' => '.row']);?>
                                        </div>

                                <?php } ?>
                                <div class="clearfix"></div>
                            </div>
                            <!--                 блок из верстки пока что  не включается решили обойтись списком-->
                                <?php foreach($elements as $item) { break; ?>
                                    <div class="row">
                                        <div class="col-lg-6 col-xs-6">
                                            <strong><?=$item->getModel()->getCartName();?> (<?=$item->getModel()->getCartPrice();?> р.)</strong>
                                            <?=ChangeOptions::widget(['model' => $item, 'type' => 'radio']); ?>
                                        </div>
                                        <div class="col-lg-4 col-xs-4">
                                            <?=ChangeCount::widget(['model' => $item]);?>
                                        </div>
                                        <div class="col-lg-2 col-xs-2">
                                            <?=DeleteButton::widget(['model' => $item, 'lineSelector' => '.row']);?>
                                        </div>
                                    </div>


                                <div class="food yellow">
                                    <div class="wrp_img_order">
                                        <img class="text-center"  src="/images/food1.png" alt="food">
                                    </div>
                                    <div class="caption">
                                        <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>

                                        <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0,'text'=>'количество:']);?>
                                        <div class="input-group">
                                            <span class="count_food_text">количество: </span>
                                            <span class="input-group-addon  input-group-addon_f"></span>
                                            <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon input-group-addon_l"></span>
                                        </div>


                                        <div class="short_desc text-left">
                                            <p>
                                                Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                            </p>

                                        </div>

                                        <div class="price text-left">
                                            <?=$item->getModel()->getCartPrice();?> грн
                                        </div>


                                    </div>
                                    <div class="delete">
                                        <a href="#" class="delete_btn btn"></a>
                                    </div>
                                </div>
                            <?php }  ?>

                        </div>
                        <div class="clearfix"></div>

                        <div class="footer_foodarea">
                            <div class="row ">



                                <div class="clearfix"></div>


                                <div class="col-sm-12 price_area">
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span>Сумма заказа:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                            <?=CartInformerExt::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span>Доставка:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                                     <?=DeliveryInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span> К оплате за 27.01.2017:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                            <?=TotalPayExtInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span class="text_total_price">ВСЕГО:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select total_price">
                                            <?=TotalPayInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12 return_area text-center">
                                    <p><a href="#">Вернуться на главную</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>






            </div>
            <!--     right parrt-->


            <div class="col-sm-12 col-md-6 right_cart">
                <div class="food_block2">
                    <div class="wrp_info_select_day">
                        <div class="nice">Babooshka</div>
                        <div class="add_day">
                            <div class="pull-left">
                                Оформление заказа
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="add_day">
                            <p class="info-min-price">
                                Минимальная сумма заказа - 300 грн
                            </p>
                            <p style="text-indent: 5px;">
                                Время приготовления и доставка зависит от времени суток и заказаных блюд и составляет не менее двух часов.
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form_area">
                        <?=OrderForm::widget(['view'=>'@app/components/views/order-form/form']);?>
                    </div>

                    <hr style="border-color: grey;">

                    <div class="clearfix"></div>





                </div>






            </div>
            <!--       end main-->
        </div>







