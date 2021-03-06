<?php

namespace backend\controllers;

use dvizh\shop\models\Category;
use Yii;
use common\models\Leftmenu;
use common\models\LeftmenuSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LeftmenuController implements the CRUD actions for Leftmenu model.
 */
class LeftmenuController extends Controller
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
     * Lists all Leftmenu models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new LeftmenuSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,


        ]);
    }

    /**
     * Displays a single Leftmenu model.
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
     * Creates a new Leftmenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Leftmenu();
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
     * Updates an existing Leftmenu model.
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
            return $this->redirect(['view', 'id' => $model->id]);
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
     * Deletes an existing Leftmenu model.
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
     * Finds the Leftmenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Leftmenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Leftmenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
