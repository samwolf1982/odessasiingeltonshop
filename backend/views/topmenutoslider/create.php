<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Topmenutoslider */

$this->title = 'Добавить категорию';
$this->params['breadcrumbs'][] = ['label' => 'Категории на главной странице', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topmenutoslider-create">



    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
        'params' => $params,
    ]) ?>

</div>
