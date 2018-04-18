<?php

namespace backend\controllers;

use Yii;
use common\models\Topmenutoslider;
use common\models\TopmenutosliderSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use dvizh\shop\models\Category;

/**
 * TopmenutosliderController implements the CRUD actions for Topmenutoslider model.
 */
class TopmenutosliderController extends Controller
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
     * Lists all Topmenutoslider models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TopmenutosliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Topmenutoslider model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Topmenutoslider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Topmenutoslider();
        $categorylist=Category::find()->all();
        $items = ArrayHelper::map($categorylist,'id','name');
        $params = [
            'prompt' => 'Выберите категорию'
        ];
        $model->sort=0;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'items' => $items,
            'params' => $params,
        ]);
    }

    /**
     * Updates an existing Topmenutoslider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        $categorylist=Category::find()->all();
        $items = ArrayHelper::map($categorylist,'id','name');
        $params = [
            'prompt' => 'Выберите категорию'
        ];
        return $this->render('update', [
            'model' => $model,
            'items' => $items,
            'params' => $params,
        ]);

    }

    /**
     * Deletes an existing Topmenutoslider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Topmenutoslider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Topmenutoslider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Topmenutoslider::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
