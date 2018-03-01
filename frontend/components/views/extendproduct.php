<?php

use app\components\ChangeCountExt;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\shop\widgets\ShowPrice;
use frontend\assets\CategorysliderAsset;

//CategorysliderAsset::register($this);
?>

<?php $item= $product; ?>
<!--order complex-->
<div class="food_area">

    <div class="clearfix"></div>

    <div class="food_block food_block_order ">

        <div class="order_area">
            <div class="food food_clear yellow">
                <div class="caption">
                    <h4><a href="#"><?=$item->name?> </a></h4>
                    <hr>

                    <?=ChangeCountExt::widget(['model' => $item,'parent_id'=>0]);?>

                    <hr>

                    <div class="price">
                        <?=ShowPrice::widget(['model' => $item]);?> грн
                    </div>
                    <div class=" order text-center">
                        <?=BuyButton::widget(['model' => $item,'text'=>'Заказать']);?>
                    </div>

                    <ul class="order_complex_list">
                        <?php foreach ($item->getRelations()->all() as $rel) {  ?>
                            <li><span class="prod_name"><?=$rel->name?></span>
                                <br> <div class="wrp_price_ext_prod"> <span class="prod_price"><?=ShowPrice::widget(['model' => $rel]);?>грн </span>/<span class="prod_count dviz_prod_count_<?=$rel->id;?>">1</span>шт  </div> </li>
                        <?php  } ?>
                    </ul>



                </div>
            </div>
        </div>

        <div class="wrap_food">
            <?php
            foreach ($item->getRelations()->all()  as $it) { ?>
                <div class="food yellow">
                    <img src="<?=$it->getImage()->getUrl('278x247');?>" alt="food">
                    <div class="caption">
                        <h4><a href="#"><?=$it->name?>  </a></h4>

                        <?=ChangeCountExt::widget(['model' => $it,'parent_id'=>$item->id]);?>
                        <div class="short_desc text-center">
                            <p>
                                Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                            </p>
                        </div>
                        <div class="price text-center">
                            <?=ShowPrice::widget(['model' => $it]);?>  грн
                        </div>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
    <div class="clearfix"></div>


</div>

