<?php

use app\components\ChangeCountExt;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\shop\widgets\ShowPrice;
use frontend\assets\CategoryleftmenuAsset;
use frontend\assets\CategorysliderAsset;
use yii\helpers\Url;

CategoryleftmenuAsset::register($this);
?>

<div id="menu" >
    <nav>
<?php if(!$categories) { ?>
    <h2 class="menu_left_header">Заполните категории и товары в <a href="<?=Url::toRoute(['/backend/web/']);?>">админке</a>.</h2>
<?php } else { ?>
    <h2 class="menu_left_header"><i class="fa fa-reorder"></i><?=$name?></h2>
    <ul>

        <?php foreach($categories as $cat) { ?>
            <li
                <?php if($cat->id == $category->id) echo 'class="active"';?>>
                <a href="<?=$cat->url;?>"><?=$cat->text;?> </a> <img onclick="$('#menu').multilevelpushmenu('toogle');" src="<?=$cat->getImage()->getUrl('25x24')?>" alt="<?=$cat->text;?>">
            </li>
        <?php } unset($categories); ?>
    </ul>
<?php } ?>

    </nav>
</div>



