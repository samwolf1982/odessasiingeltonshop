<?php

namespace frontend\controllers;

use Yii;
use common\models\Testimonials;
use frontend\models\TestimonialsSearch;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestimonialsController implements the CRUD actions for Testimonials model.
 */
class TestimonialsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Testimonials models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TestimonialsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $pages = new Pagination(['totalCount' => $dataProvider->getTotalCount()]);
        //$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 5]);


        $breadcrumps=$this->generate_breads_crump();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'pages' => $pages,
            'breadcrumps' => $breadcrumps,
        ]);
    }

    /**
     * Displays a single Testimonials model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }





    /**
     * Finds the Testimonials model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Testimonials the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Testimonials::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    private  function generate_breads_crump(){
        $breadcrumps=[];
        $tmp=[ 'label' => 'Отзывы наших клиентов'];
        array_unshift($breadcrumps,$tmp);
        $tmp=[ 'label' => 'Наше Меню' ,'url' => ['/category'],];
        array_unshift($breadcrumps,$tmp);
        return $breadcrumps;

    }
}
