<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Modalorder */

$this->title = 'Create Modalorder';
$this->params['breadcrumbs'][] = ['label' => 'Modalorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalorder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
