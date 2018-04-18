<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Leftmenu */

$this->title = 'Обновить боковое меню: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Leftmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="leftmenu-update">


    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
        'params' => $params,
    ]) ?>

</div>
