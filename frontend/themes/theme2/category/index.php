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
    <!--category menu-->
    <ul class="nav nav-pills nav-justified hidden">
        <li ><a href="/">салаты</a></li>
        <li><a href="/">первые блюда</a></li>
        <li><a href="/index2.php">вторые блюда</a></li>
        <li><a href="#">гарниры</a></li>
        <li><a href="#">напитки и десерты</a></li>
    </ul>
    <!--week menu-->
    <div class="wrap_week_menu hidden">
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
            <li class="pdf_week"><a href="#"><div class="week_name">Меню в pdf</div><span class="week_time"></span></a></li>
            <li class="next_week"><a href="#"><div class="week_name">&#8594;</div><span class="week_time">следующая неделя</span></a></li>

        </ul>
    </div>

    <?php
    // $this is the view object currently being used
    echo Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
        'links' => [
            'Наше меню',
        ],
    ]);
    ?>

    <div class="clearfix"></div>



    <div class="food_block">

        <div class="clearfix"></div>
        <div class="food_area ">
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>

            </div>
            <div class="clearfix"></div>

            <div class="food_block">
                            <?php foreach($categories as $cat) { ?>
                    <div class="food yellow">
                        <a href="<?=Url::to(['category/view', 'categoryId' => $cat->id])?>"><img src="<?=$cat->getImage()->getUrl('200x200');?>" alt="<?=$cat->name;?>" /></a>
                        <div class="caption">
                            <h4><?= Html::a($cat->name, [Url::to(['category/view', 'categoryId' => $cat->id])], ['class' => '']) ?></h4>

                            <div class="short_desc text-center hidden">
                                <p>
                                    <?php //$cat->short_text?>
                                </p>
                            </div>

                        </div>
                    </div>
                <?php }  ?>

            </div>
            <div class="clearfix"></div>


        </div>
        <div class="clearfix"></div>



</div>
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
