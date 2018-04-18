<?php

use dosamigos\editable\Editable;
use dosamigos\grid\columns\EditableColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ModalorderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки с формы заказа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalorder-index">




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}  {delete}'],
          //  ['class' => 'yii\grid\SerialColumn'],

            'id',
            'phone:ntext',
            'time_user:ntext',
            'name:ntext',
            'email:ntext',
            //'comment:ntext',
            [
                'label' => 'Коментарий',
                'value' => function($data){
        $lim=20;
                  $res=  substr ($data->comment,0,$lim);
        if (strlen($res)>$lim){
            return  $res.'...';
        }else{
            return $res;
        }


                },
            ],




            [
                'class' => EditableColumn::className(),
                'attribute' => 'status',
                 'url'=>['/modalorder/edit'],
                'type' => 'select',
                'value' => function ($data) {
                    return     $data->status?'Обработано':'Не обработано';
                },
                'editableOptions' => [
                  //  'mode' => 'inline',
                    //'pk' => 2,

                  'source' => [['value'=> 0, 'text'=> "Не обработано"],['value'=> 1, 'text'=> "Обработано"],],
                ],
            ],


            //'status',
          // 'sort',
            'time',


        ],
    ]); ?>
</div>
