<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Leftmenu */

$this->title = 'Create Leftmenu';
$this->params['breadcrumbs'][] = ['label' => 'Leftmenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leftmenu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
