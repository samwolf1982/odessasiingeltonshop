<?php
/* @var $this yii\web\View */


use frontend\assets\DeliveryAsset;
use yii\widgets\Breadcrumbs;

DeliveryAsset::register($this);

?>


<div class="col-sm-12 main">
    <?php
    echo Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
        'links' =>[''] ,
    ]);
    ?>


<h1>/mainpage/index  465</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
</div>
