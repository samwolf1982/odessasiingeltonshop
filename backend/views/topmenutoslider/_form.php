<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Topmenutoslider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topmenutoslider-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-sm-6">
        <?= $form->field($model, 'category_id')->dropDownList($items,$params) ?>


    </div>
    <div class="col-sm-6">
        <?= $form->field($model, 'sort')->textInput() ?>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
