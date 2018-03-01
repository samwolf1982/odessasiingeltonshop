<?php

use app\components\ChangeCountExt;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\shop\widgets\ShowPrice;
use frontend\assets\CategorysliderAsset;

CategorysliderAsset::register($this);
?>
        <!--                Салаты-->
        <div class="slider_food_block food_area">
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <h2><?=$category->name?></h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>
            <div class="owl-carousel owl-theme food_block">
                <?php  foreach ($products as $item) {  ?>
                    <div class="food yellow">
                        <img class="lazy" src="/images/preload.gif"  data-src="<?=$item->getImage()->getUrl('278x247');?>" alt="<?=$category->name?>" />
                        <div class="caption">
                            <h4><a href="#"><?=$item->name?></a></h4>
                                <?=ChangeCountExt::widget(['model' => $item,'text'=>'количество:']);?>
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
                <?php }  ?>
            </div>

        </div>

