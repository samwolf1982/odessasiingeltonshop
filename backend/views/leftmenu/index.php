<?php

use dvizh\shop\models\Category;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\LeftmenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Боковое меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leftmenu-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить боковое меню', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
//            'category_id',
            [
                      'attribute' => 'category_id',
                                      'content' => function ($model) {
                                          $category=Category::find()->where(['id'=>$model->category_id])->one();
                                          if (!empty($category)){
                                              return $category->name;
                                          }
                                          return '--';
                }

],
            'text',
            [
                'attribute' => 'images',
                'format' => 'images',
                'filter' => false,
                'content' => function ($model) {
                    if($image = $model->getImage()->getUrl('50x30')) {
                        return "<img src=\"{$image}\" class=\"thumb\" />";
                    }
                }
            ],
            'sort',
            'url:url',
            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {delete}'],
        ],
    ]); ?>
</div>
