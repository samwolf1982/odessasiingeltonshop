<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Leftmenu */

$this->title = 'Добавить боковое меню';
$this->params['breadcrumbs'][] = ['label' => 'Leftmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leftmenu-create">

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
        'params' => $params,
    ]) ?>

</div>
