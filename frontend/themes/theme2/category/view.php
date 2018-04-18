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


                <?php  if (!empty($current_cat->childs)) {  ?>

                <div class="food_block_header text-center">
                    <div class="nice">Babooshka</div>
                    <h2><?=$current_cat->name;?></h2>
                    <div class="bottom_food_block_header">
                        <img src="/images/food.png" alt="Комплексные обеды">
                    </div>
                </div>

                <div class="food_block">
                    <?php foreach ($current_cat->childs as $cat) {
                        // fix не грузит картинку из деток. // причина переопределение
                        $category_fix=Category::find()->where(['id'=>$cat->id])->one();
                        if ($category_fix){
                            $img_cat=$category_fix->getImage()->getUrl('198x220');
                        }else{
                            $img_cat=$cat->getImage()->getUrl('198x220');
                        }
                        ?>
                        <div class="food yellow">
                            <a href="<?=Url::to(['category/view', 'categoryId' => $cat->id])?>"><img src="<?=$img_cat;  ?>"
                                             alt="<?= $cat->name; ?>"/></a>
                            <div class="caption">
                                <h4><?= Html::a($cat->name, [Url::to(['category/view', 'categoryId' => $cat->id])], ['class' => '']) ?></h4>


                            </div>
                        </div>
                    <?php  unset($img_cat); }?>
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
<div class="clearfix"></div>
            <div class="food_block">
                <?php if (count($current_cat->childs)>0){ ?>
           <?php     foreach ($current_cat->childs as $cat) { ?>
                            <?php foreach($cat->products as $product) {       ?>
                    <div class="food yellow">

                        <div class="like_me hvr-grow">
                            <img class="likemeimg"  src="/images/like.png" data-model="<?=$product::className()?>" alt="like_me" data-toggle="tooltip"  data-original-title="Нравится" data-id="<?php echo $product->id; ?>">
                        </div>
                        <a href="<?=Url::to(['/product', 'id' => $product->id])?>">  <img src="<?=$product->getImage()->getUrl('198x220');?>" alt="<?=$product->name;?>" /></a>
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
                                ?>



                                <?=BuyButton::widget(['model' => $product,'text'=>'Заказать','options'=>$options_arr]);?>



                            </div>

                        </div>
                    </div>
                <?php }   } }elseif(count($current_cat->products)>0){ // если нету родительской кат  last 200x-200   ?>
                <?php  foreach($current_cat->products as $product) {  ?>

                <div class="food yellow">


                    <div class="like_me hvr-grow">
                        <img class="likemeimg"  src="/images/like.png" alt="like_me" data-toggle="tooltip"  data-model="<?=$product::className()?>" data-original-title="Нравится" data-id="<?php echo $product->id; ?>">
                    </div>

                    <a href="<?=Url::to(['/product', 'id' => $product->id])?>">  <img src="<?=$product->getImage()->getUrl('198x220');?>" alt="<?=$product->name;?>" /></a>

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
                            ?>



                            <?=BuyButton::widget(['model' => $product,'text'=>'Заказать','options'=>$options_arr]);?>
                        </div>

                    </div>
                </div>
                <?php }  ?>
                <?php  }else{ ?>

                    <style>
                        .food_block{
                            margin-top: 0!important;
                        }
                    </style>
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
