<?php

use app\components\CategorysliderWidget;
use app\components\ChangeCountExt;
use app\components\ExtendproductWidget;
use app\components\OrderFormExt;
use frontend\assets\CategoryAsset;
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
use yii\widgets\Breadcrumbs;
use yii\widgets\Pjax;

/* @var $this yii\web\View */

$this->title = 'Быстрая доставка еды';
MainpageAsset::register($this);
CategoryAsset::register($this);
//TempAsset2::register($this);
?>

<div class="col-sm-12 main">

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


                <?php  if (!empty($current_cat->childs)) {  ?>

                <div class="food_block_header text-center">
                    <div class="nice">Babooshka</div>
                    <h2><?=$current_cat->name;?></h2>
                    <div class="bottom_food_block_header">
                        <img src="/images/food.png" alt="Комплексные обеды">
                    </div>
                </div>

                <div class="food_block">
                    <?php foreach ($current_cat->childs as $cat) { ?>
                        <div class="food yellow">
                            <a href="<?=Url::to(['category/view', 'categoryId' => $cat->id])?>"><img src="<?= $cat->getImage()->getUrl('200x200'); ?>"
                                             alt="<?= $cat->name; ?>"/></a>
                            <div class="caption">
                                <h4><?= Html::a($cat->name, [Url::to(['category/view', 'categoryId' => $cat->id])], ['class' => '']) ?></h4>
                                <div class="short_desc text-center hidden">
                                    <p>
                                        <?php //$cat->short_text ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                    <?php }?>
                </div>
              <?php  } ?>


                <div class="clearfix"></div>


            <div class="clearfix"></div>







            <!--        product in    cat -->
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <?php  if (empty($current_cat->childs)) {  ?>   <h2><?=$current_cat->name;?></h2>  <?php } ?>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>

            <div class="food_block">
                <?php if (count($current_cat->childs)>0){ ?>
           <?php     foreach ($current_cat->childs as $cat) { ?>
                            <?php foreach($cat->products as $product) { ?>
                    <div class="food yellow">
                        <a href="<?=Url::to(['/product', 'id' => $product->id])?>">  <img src="<?=$product->getImage()->getUrl('200x200');?>" alt="<?=$product->name;?>" /></a>
                        <div class="caption">
                            <h4><?= Html::a($product->name, [Url::to(['/product', 'id' => $product->id])], ['class' => '']) ?></h4>

                            <?=ChangeCountExt::widget(['model' => $product,'parent_id'=>0,'text'=>'']);?>



                            <div class="short_desc text-center">
                                <p>
                                    <?=$product->short_text?>
                                </p>

                            </div>

                            <div class="price text-center">
                                <?=ShowPrice::widget(['model' => $product]);?> грн
                            </div>

                            <div class="order text-center">
                                <?=BuyButton::widget(['model' => $product,'text'=>'Заказать']);?>
                            </div>

                        </div>
                    </div>
                <?php }   } }elseif(count($current_cat->products)>0){ // если нету родительской кат ?>
                <?php  foreach($current_cat->products as $product) { ?>
                <div class="food yellow">
                    <a href="<?=Url::to(['/product', 'id' => $product->id])?>">  <img src="<?=$product->getImage()->getUrl('200x200');?>" alt="<?=$product->name;?>" /></a>
                    <div class="caption">
                        <h4><?= Html::a($product->name, [Url::to(['/product', 'id' => $product->id])], ['class' => '']) ?></h4>

                        <?=ChangeCountExt::widget(['model' => $product,'parent_id'=>0,'text'=>'']);?>



                        <div class="short_desc text-center">
                            <p>
                                <?=$product->short_text?>
                            </p>

                        </div>

                        <div class="price text-center">
                            <?=ShowPrice::widget(['model' => $product]);?> грн
                        </div>

                        <div class="order text-center">
                            <?=BuyButton::widget(['model' => $product,'text'=>'Заказать']);?>
                        </div>

                    </div>
                </div>
                <?php }  ?>
                <?php  }else{ ?>
                    <div class="col-sm-12 text-center" style="min-height: 250px;">
                        <section>
                        <p>Извините в даной категории ничего не найдено</p>
                        <p>Может вы найдете что-то вкусненькое</p>
                            в <br>
                           <h3 class="nice"> <a href="/" > нашем меню</a> </h3>
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
