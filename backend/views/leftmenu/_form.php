<?php

use dvizh\gallery\widgets\Gallery;
use dvizh\shop\models\Category;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Leftmenu */
/* @var $form yii\widgets\ActiveForm */
?>


<style>
    .wrap_galery br{
        display: none;
    }
</style>
<div class="leftmenu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-sm-12 col-sm-6">  <?= $form->field($model, 'category_id')->dropDownList($items,$params)?></div>
    <div class="col-sm-12 col-sm-6"> <?= $form->field($model, 'text')->textInput(['placeholder'=>'по умолчанию будет использоватся название категории']) ?></div>

    <div class="col-sm-12 col-sm-6">    <?= $form->field($model, 'url')->textInput(['maxlength' => true,'placeholder'=>'по умолчанию будет использоватся url категории']) ?>    </div>
    <div class="col-sm-12 col-sm-6 ">     <?= $form->field($model, 'sort')->textInput() ?></div>
    <div class="col-sm-12 col-sm-6 wrap_galery">     <?=Gallery::widget(['model' => $model]); ?></div>

    <div class="clearfix"></div>





    <div class="col-sm-12 " style="padding-top: 1em;">
        <div class="form-group pull-left ">
            <?= Html::submitButton('Cохранить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>




    <?php ActiveForm::end(); ?>

</div>


