<?php

use dvizh\shop\models\Category;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TopmenutosliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Верхние категории для главной страницы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topmenutoslider-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
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
            'sort',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {delete}'],
        ],
    ]); ?>
</div>
