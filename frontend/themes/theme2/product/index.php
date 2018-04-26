<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use app\models\OcCountry;
use frontend\assets\MainpageAsset;
use frontend\assets\ProductAsset;
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
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Быстрая доставка еды';
MainpageAsset::register($this);
ProductAsset::register($this);



//TempAsset2::register($this);
?>

<br>




<div class="col-sm-12 main">


    <?php
    echo Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
        'links' =>$breadcrumps ,
    ]);
    ?>



    <div class="clearfix"></div>






    <div class="food_block">

        <div class="food_block_header text-center">
            <div class="nice">Babooshka</div>
            <h2>    <?=$product->name?></h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>


        <div class="clearfix"></div>


        <div class="col-sm-12 col-md-12 col-lg-9 clearpadinglr">
            <div class="food_area single_food ">


                <div class="col-sm-12 col-md-5 ">
                    <div class="wrp_slider_img preview">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <a class="thumbnail fancybox" rel="ligthbox" href="<?=$product->getImage()->getUrl('600x700');?>">
                                    <img class="img-responsive"  src="<?=$product->getImage()->getUrl('400x580');?>" alt="food" />
                                </a>
                            </div>
                            <!--                   <div class="tab-pane" id="pic-2"><img src="/gallery/images/image-by-item-and-alias?item=Product16&dirtyAlias=43f48ebfaf-2_278x247.jpg" /></div>-->
                            <!--                   <div class="tab-pane" id="pic-3"><img src="/gallery/images/image-by-item-and-alias?item=Product13&dirtyAlias=397e85f293-2_278x247.jpg" /></div>-->
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs hidden">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?=$product->getImage()->getUrl('60x60');?>" /></a></li>
                            <!--                   <li><a data-target="#pic-2" data-toggle="tab"><img src="/gallery/images/image-by-item-and-alias?item=Product16&dirtyAlias=43f48ebfaf-2_278x247.jpg" /></a></li>-->
                            <!--                   <li><a data-target="#pic-3" data-toggle="tab"><img src="/gallery/images/image-by-item-and-alias?item=Product13&dirtyAlias=397e85f293-2_278x247.jpg" /></a></li>-->

                        </ul>

                    </div>
                </div>





                <div class="col-sm-12 col-md-7">
                    <div class="wrp_info_product">
                        <p>
                            <?=$product->text?>
                        </p>
                        <div class="wrp_select_day">
                            <div class="row">
                                <div class="col-sm-12 porciya">
                                    <div class="porciya">
                                        <div class="donate-now">
                                            <div id="donate">
                                                <?=ChangeOptions::widget(['model' => $product,'label'=>'Порция: ']);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 hidden">
                                    <div class="wrap_time_select">
                                        <span class="infoname">День доставки: </span>
                                        <div class="form-group ">
                                            <div class="input-group date datetimepicker" id="datetimepicker0">
                                                <input type="text" class="form-control" name="datetimepicker0_name">
                                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                                       </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>




                                <div class="col-sm-12">

                                    <div class="wrp_count">
                                        <div class="food_block">
                                            <div class="food productfood">
                                                <div class="under_food" id="single_prod_page">


                                                    <?=ChangeCountExt::widget(['model' => $product,'parent_id'=>0,'text'=>'']);?>


                                                    <div class="price text-center">
                                                        <?=ShowPrice::widget(['model' => $product]);?> грн
                                                    </div>

                                                    <div class="order text-center">

                                                        <?php
                                                        $cart_opt=  $product->getCartOptions();
                                                        $k_m_list=  array_keys($product->getCartOptions());

                                                        $km=$k_m_list[0];
                                                        //                          var_dump( $km);
                                                        //   yii::error(   $product->getCartOptions());
                                                        $c_o_list= array_keys($cart_opt[$km]['variants']);
                                                        $c_o=$c_o_list[0];
                                                        // yii::error(   $cart_opt[$km[0]]['variants']);
                                                        $options_arr=null;
                                                        if (!empty($km) && !empty($c_o)){
                                                            $options_arr[$km]=$c_o;
                                                        }
                                                        yii::error( $options_arr);
                                                        ?>
                                                        <?=BuyButton::widget(['model' => $product,'text'=>'Заказать','options'=>$options_arr]);?>
                                                    </div>

                                                    <div class="like_me">
                                                        <a href="#" class="image_button likemeimg" data-id="<?=$product->id?>" data-model="<?=$product::className()?>" ><img src="/images/like.png" alt="like"></a>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>

                                    </div>


                                </div>


                            </div>
                        </div>






                    </div>
                </div>

                <div class="food_block yellow">





                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-12 col-lg-3 hidden-sm">

            <?php foreach ($testimonials as $tm) { ?>
                <section class="coment_section">
                    <a href="<?=Url::to(['/testimonials'])?>"><p>
                       <span class="name_user"><?=$tm->name?></span>  <i class="fa fa-calendar" aria-hidden="true"></i>  <span class="time_coments"><?=date_format( date_create($tm->created_at),"d.m.Y") ?></span>
                   </p></a>
                    <div class="comment_text">
                        <?=$tm->comment?>
                    </div>
                </section>
           <?php } ?>


        </div>




        <div class="food_block">

            <?php
            foreach ([] as $item) { //yii::error($item); ?>
                <div class="food yellow">
                    <a href="<?=Url::to(['site/index', 'id' => $item->id])?>">
                        <img src="<?=$item->getImage()->getUrl('278x247');?>" alt="food">
                    </a>
                    <div class="caption">
                        <h4>   <?= Html::a($item->name, [Url::to(['site/index', 'id' => $item->id])], ['class' => '']) ?></h4>
                        <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0,'text'=>'количество:']);?>
                        <div class="short_desc text-center">
                            <p>
                                <?=$item->short_text?>
                            </p>
                        </div>
                        <div class="price text-center">
                            <?=ShowPrice::widget(['model' => $item]);?> грн
                        </div>
                        <div class="order text-center">
                            <?=BuyButton::widget(['model' => $item,'text'=>'Заказать']);?>
                        </div>

                    </div>
                </div>


            <?php  } ?>
        </div>



        <div class="clearfix"></div>

        <!--                Салаты-->
<!--        --><?php // CategorysliderWidget::widget(['category_id' => 5]) ?>



        <div class="clearfix"></div>

        <?php if(0){ ?>

        <?= CategorysliderWidget::widget(['category_id' => $product,'w'=>'278','h'=>"447",'title'=>'Рекомендуемые блюда','is_rel'=>true]);  // 5-ok ?>

        <?php } ?>

        <!--                Напитки и Десерты-->
        <div class="clearfix"></div>






    </div>







</div>




<div class="clearfix"></div>


    <!--в продакшене удалить-->









