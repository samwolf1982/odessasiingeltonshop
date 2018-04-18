<?php

namespace frontend\controllers;

use common\models\Productsimple;
use Yii;
use common\models\Wishlist;
use frontend\models\WishlistSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * WishlistController implements the CRUD actions for Wishlist model.
 */
class WishlistController extends Controller
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
                    //'delete' => ['POST'],
                    //'create' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Wishlist models.
     * @return mixed
     */
    public function actionIndex()
    {

        $cookies = Yii::$app->request->cookies;
        $user_tmp_id=Yii::$app->user->getId();
        if(is_null($user_tmp_id)){
            //$user_tmp_id = $session->get('user_tmp_id');
            $user_tmp_id = $cookies->getValue('user_tmp_id');
            // $user_tmp_id =   $user_tmp_id = $cookies->getValue('user_tmp_id', rand(-999999999,-1));
        }
        $w_arr=Wishlist::find()->select(['product_id'])->where(['user_id'=>$user_tmp_id])->asArray()->all();
        $w_arr= ArrayHelper::getColumn($w_arr, 'product_id');
        $query = Productsimple::find()->where(['in','id',$w_arr])->orderBy('id DESC');
        $queryForFilter = clone $query;
        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $products = $query->limit(12)->all();



        $categories=[];
        // breadcrumps
        $breadcrumps=$this->generate_breads_crump(19);

        //----------
        return $this->render('index', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products_cats' => $products,
          //  'current_cat' => $current_cat,
            'breadcrumps'=>$breadcrumps,
        ]);

    }

    private  function generate_breads_crump($current_cat){

        $breadcrumps=[];
        $tmp=[ 'label' => 'Любимые блюда'];
        array_unshift($breadcrumps,$tmp);
        $tmp=[ 'label' => 'Наше Меню' ,'url' => ['/category'],];

        array_unshift($breadcrumps,$tmp);

        return $breadcrumps;

        $breadcrumps=[];
        // глубина категорий 10
        $c=$current_cat;
        for($i=0; $i<=10; $i++){
            if ($i==0){ // без ссылки
                $tmp=[ 'label' => $c->name];
            }else{
                $tmp=[ 'label' => $c->name,'url' => ['category/', 'categoryId' => $c->id],];
            }
            array_unshift($breadcrumps,$tmp);
//            yii::error($breadcrumps);
            unset($tmp);
            if (is_null( $c->parent_id)){ break;}
            $c=$c->parent;
        }


        $tmp=[ 'label' => 'Наше меню','url' => ['/category'],];
        array_unshift($breadcrumps,$tmp);
        unset($c); unset($tmp);
        $cp= $current_cat->parent_id;
        return          $breadcrumps;
    }


    /**
     * Displays a single Wishlist model.
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
     * Creates a new Wishlist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($product_id,$data_model)
    {

//        'user_id' => 'Ид пользователя или временное ид отрицательное',
//    'product_id' => 'Ид товара',
//    'model' => 'модель',
//    'options' => 'модель',
//    'created_at' => 'Время создания, для бекенда',
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $cookies = Yii::$app->request->cookies;
        $user_tmp_id=Yii::$app->user->getId();
        if(is_null($user_tmp_id)){
            //$user_tmp_id = $session->get('user_tmp_id');
            $user_tmp_id = $cookies->getValue('user_tmp_id');
           // $user_tmp_id =   $user_tmp_id = $cookies->getValue('user_tmp_id', rand(-999999999,-1));
        }
        yii::error($user_tmp_id);
        $res['status']=false;
        $res['count_like']=0;
        $model=Wishlist::find()->where(['product_id'=>$product_id,'user_id'=>$user_tmp_id])->one();


         if (!$model){

             $model = new Wishlist();
             $model->product_id=$product_id;
             $model->user_id=$user_tmp_id;
             $model->model=$data_model;
             $model->options='some options';
             $model->created_at=date("Y-m-d H:i:s");
             if ($model->validate() &&   $model->save()){
                 $res['status']=true;
             }else{
                 $res['error']=$model->errors;
             }
         }



        $res['count_like']=Wishlist::find()->where(['user_id'=>$user_tmp_id])->count();
        return $res;


    }

    /**
     * Deletes an existing Wishlist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($product_id,$data_model)
    {
        //        'user_id' => 'Ид пользователя или временное ид отрицательное',
//    'product_id' => 'Ид товара',
//    'model' => 'модель',
//    'options' => 'модель',
//    'created_at' => 'Время создания, для бекенда',
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $cookies = Yii::$app->request->cookies;
        $user_tmp_id=Yii::$app->user->getId();
        if(is_null($user_tmp_id)){
            //$user_tmp_id = $session->get('user_tmp_id');
            $user_tmp_id = $cookies->getValue('user_tmp_id');
            // $user_tmp_id =   $user_tmp_id = $cookies->getValue('user_tmp_id', rand(-999999999,-1));
        }
        yii::error($user_tmp_id);
        $res['status']=false;
        $res['count_like']=0;
        $model=Wishlist::find()->where(['product_id'=>$product_id,'user_id'=>$user_tmp_id])->one();


        if ($model){

            $model->delete();
            $res['status']=true;
        }



        $res['count_like']=Wishlist::find()->where(['user_id'=>$user_tmp_id])->count();
        return $res;
    }

    /**
     * Finds the Wishlist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wishlist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wishlist::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
