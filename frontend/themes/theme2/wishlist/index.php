<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use frontend\assets\CategoryAsset;
use frontend\assets\MainpageAsset;
use frontend\assets\TempAsset;
use frontend\assets\WishlistAsset;
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

$this->title = 'Любимые блюда';
MainpageAsset::register($this);
CategoryAsset::register($this);
WishlistAsset::register($this);
//TempAsset2::register($this);


?>

<div class="col-sm-12 main">

    <style>
        .caption h4{
            min-height: 0;
        }
        .caption h4 a{
            font-size: 16px;
        }
    </style>


    <?php
    echo Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
        'links' =>$breadcrumps ,
    ]);
    ?>



    <div class="food_block">

        <div class="clearfix"></div>
        <div class="food_area ">

            <!--            category-->
            <div class="clearfix"></div>





            <div class="clearfix"></div>



            <style>
                .food_block{
                    margin-top: 0!important;
                }
            </style>



            <!--        product in    cat -->
            <div class="food_block_header text-center">
                <div class="nice">Babooshka </div>
               <h2><?=$this->title;?></h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="food_block">
                <?php     if (count($products_cats)>0){ ?>

                        <?php foreach($products_cats as $product) {       ?>

                            <div class="food yellow" id="remove_id_<?=$product->id?>">
                                <a href="#" class="delete_wishlist" data-id="<?=$product->id?>" data-model="<?=$product::className()?>" >
                                    <img cl src="/images/minus-2-256.png" alt="delete">
                                </a>
                                <a href="<?=Url::to(['/product', 'id' => $product->id])?>">  <img src="<?=$product->getImage()->getUrl('198x220');?>" alt="<?=$product->name;?>" />
                                </a>

                                <div class="caption">
                                    <h4><?= Html::a($product->name, [Url::to(['/product', 'id' => $product->id])], ['class' => '']) ?></h4>

                                    <div class="porciya_drop_price">
                                        <div class="donate-now">
                                            <div id="donate">
                                                <?=ChangeOptions::widget(['model' => $product,'label'=>'Порция: ','type'=>"select2"]);?>
                                            </div>
                                        </div>


                                        <div class="wrp_change_count">
                                            <?=ChangeCountExt::widget(['model' => $product,'parent_id'=>0,'text'=>'']);?>
                                        </div>
                                    </div>





                                    <div class="price text-center">
                                        <?=ShowPrice::widget(['model' => $product]);?> грн
                                    </div>

                                    <div class="order text-center">
                                        <?=BuyButton::widget(['model' => $product,'text'=>'Заказать']);?>
                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        <?php    } ?>

                <?php  }else{ ?>


                    <div class="col-sm-12 text-center" style="min-height: 250px;">
                        <section>
                            <p>Извините в даной категории ничего не найдено</p>
                            <p>Может вы найдете что-то вкусненькое</p>
                            в <br>
                            <h3 class="nice"> <a href="/category" > нашем меню</a> </h3>
                        </section>
                    </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>


        </div>


        <div class="clearfix"></div>



    </div>
    <div class="clearfix"></div>
</div>
