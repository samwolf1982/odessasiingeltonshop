<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Modalorder */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Modalorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalorder-view">



    <p>

        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Назад',['/modalorder'], [
            'class' => 'btn  btn-success',
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'phone:ntext',
            'time_user:ntext',
            'name:ntext',
            'email:ntext',
            'comment:ntext',
   //         'status',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    return     $data->status?'Обработано':'Не обработано';
                },
            ],
           // 'sort',
            'time',
        ],
    ]) ?>

</div>
