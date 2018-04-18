<?php

use app\components\ChangeCountExt;
use common\models\Productsimple;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\shop\widgets\ShowPrice;
use frontend\assets\CategorysliderAsset;
use yii\helpers\Url;


CategorysliderAsset::register($this);
?>
        <!--                Салаты-->
        <div class="slider_food_block food_area">
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <h2><?php if ($title){ echo $title;}else{ echo $category->name; } ?></h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>
            <div class="owl-carousel owl-theme food_block">
                <?php  foreach ($products as $item) {
                //    $item = Productsimple::find()->where(['id'=>$item2->id])->one();
                    if (!empty($item::className())){
                        $class_name= $item::className();

                    }else{
                        $class_name  =$class_name_def;
                    }



                    ?>
                    <div class="food yellow">

                        <div class="like_me hvr-grow">
                            <img class="likemeimg" data-model="<?=$class_name?>"  src="/images/like.png" alt="like_me" data-toggle="tooltip"  data-original-title="Нравится" data-id="<?php echo $item->id; ?>">
                        </div>

                        <a href="<?= Url::to(['/product', 'id' => $item->id]);?>">
                            <img class="lazy" src="/images/preload.gif"  data-src="<?=$item->getImage()->getUrl($w."x".$h);?>" alt="<?=$item->name?>" />
                        </a>
                        <div class="caption">
                            <h4><a href="<?= Url::to(['/product', 'id' => $item->id]);?>"><?=$item->name?></a></h4>

                            <div class="porciya_drop_price">
                                <div class="donate-now">
                                    <div id="donate">
                                        <?=ChangeOptions::widget(['model' => $item,'label'=>'','type'=>"select2"]);?>
                                    </div>
                                </div>


                                <div class="wrp_change_count">
                                    <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0,'text'=>'']);?>
                                </div>
                            </div>



                            <?php if ($show_desc){ ?>
                            <div class="short_desc text-center">
                                <p>
                                    <?=$item->short_text?>
                                </p>

                            </div>
                            <?php  } ?>

                            <div class="price text-center">
                                <?=ShowPrice::widget(['model' => $item]);?> грн

                            </div>
                            <div class="order text-center">
                                <?php


                                if (1) {
                                    $cart_opt = $item->getCartOptions();
                                    $k_m_list = array_keys($item->getCartOptions());

                                    $km = $k_m_list[0];
                                    //   yii::error(   $product->getCartOptions());
                                    $c_o_list = array_keys($cart_opt[$km]['variants']);
                                    $c_o = $c_o_list[0];
                                    // yii::error(   $cart_opt[$km[0]]['variants']);
                                    $options_arr = null;
                                    if (!empty($km) && !empty($c_o)) {
                                        $options_arr[$km] = $c_o;
                                    }
                                }

                                ?>



                                <?=BuyButton::widget(['model' => $item,'text'=>'Заказать','options'=>$options_arr]);?>

                            </div>


                        </div>
                    </div>
                <?php }  ?>
            </div>

        </div>

