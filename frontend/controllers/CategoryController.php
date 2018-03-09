<?php

namespace frontend\controllers;


use Yii;
use common\models\Productext;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;
use yii\web\Response;


class CategoryController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $request = Yii::$app->request;

        if ($request->isAjax) {
            /* текущий запрос является AJAX запросом */
        }else{
            //clear selected session
            $session = Yii::$app->session;
            $session->remove('prodext');
        }


        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id DESC');
        } else {
            $query = Product::find()->orderBy('id DESC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }

        $products = $query->limit(12)->all();


        //------------ ext prod
//        $productsext[] = Productext::find()->category(10)->orderBy('id DESC')->all();
        $productsext = Productext::find()->where(['in','id',[23,24,28,29,30,31,34,35]])->all();
        $active_id_complex=23;
        if (isset($_GET['id'])){
            $active_id_complex=$_GET['id'];
        }
        //----------
        return $this->render('index', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'productsext'=>$productsext,
            'active_id_complex'=>$active_id_complex,
        ]);
    }
    public function actionIndex2()
    {


        return $this->render('index');
    }

}
