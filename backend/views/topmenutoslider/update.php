<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Topmenutoslider */

$this->title = 'Обновить меню (категория ид: ' . $model->id .')';
$this->params['breadcrumbs'][] = ['label' => 'Topmenutosliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="topmenutoslider-update">



    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
        'params' => $params,
    ]) ?>

</div>
