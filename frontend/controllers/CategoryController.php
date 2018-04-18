<?php

namespace frontend\controllers;


use common\models\Categorysimple;
use common\models\Productsimple;
use Yii;
use common\models\Productext;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;
use yii\web\Cookie;
use yii\web\Response;


class CategoryController extends \yii\web\Controller
{


    public function beforeAction($action)
    {

        $user_tmp_id=Yii::$app->user->getId();
        if(is_null($user_tmp_id)){

            if (!isset(Yii::$app->request->cookies['user_tmp_id'])) {
                $user_tmp_id = rand(-999999999,-1);
                $cookie = new Cookie([
                    'name' => 'user_tmp_id',
                    'value' => $user_tmp_id,
                    'expire' => time() + 90*24*60*60,
                ]);
                \Yii::$app->response->cookies->add($cookie);
            }

        }


        return parent::beforeAction($action);
    }

    public function actionIndex()
    {

         // категории 1 уровня
        //$categories = Category::find()->where(['parent_id'=>null])->andWhere(['!=','id',4])->all();
        $categories = Category::find()->where(['parent_id'=>null])->andWhere(['!=','id',Yii::$app->params['ext_category_id']])->andWhere(['!=','id',Yii::$app->params['ext_items_category_id']])->all();




//        if($catId = yii::$app->request->get('categoryId')) {
//            //$category = Category::findOne($catId);
//            $current_cat = Category::find()->where(['id'=>$catId])->one();
//        } elseif($categories) {
//            $current_cat = current($categories);
//        } else {
//            $category = null;
//        }
//        if($current_cat) {
//            $query = Product::find()->category($current_cat->id)->orderBy('id DESC');
//        } else {
//            $query = Product::find()->orderBy('id DESC');
//        }
//
//        $queryForFilter = clone $query;
//        if($filter = yii::$app->request->get('filter')) {
//            $query->filtered($filter);
//        }
//        $products = $query->limit(12)->all();

        //----------
        return $this->render('index', [
            'categories' => $categories,


        ]);
    }


    public function actionView()
    {

        $request = Yii::$app->request;

        if ($request->isAjax) {
            /* текущий запрос является AJAX запросом */
        }else{
            //clear selected session
            $session = Yii::$app->session;
            $session->remove('prodext');
        }
        $categories = Categorysimple::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            //$category = Category::findOne($catId);
            $current_cat = Categorysimple::find()->where(['id'=>$catId])->one();

        } elseif($categories) {
            $current_cat = current($categories);

        } else {
            $category = null;
        }


//         foreach ($current_cat->childs as $cat) {
//             yii::error($cat->products);
//                 }
//        foreach ($categories as $category) {
//            yii::error($category->products);
//        }

        if($current_cat) {
            $query = Productsimple::find()->category($current_cat->id)->orderBy('id DESC');
        } else {
            $query = Productsimple::find()->orderBy('id DESC');
        }

        $queryForFilter = clone $query;
        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $products = $query->limit(12)->all();



        // breadcrumps
        $breadcrumps=$this->generate_breads_crump($current_cat);

        //----------
        return $this->render('view', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products_cats' => $products,
            'current_cat' => $current_cat,
            'breadcrumps'=>$breadcrumps,
        ]);
    }

    /**
     * generate bread crump array for breadcrump widget
     * example to use  --->   echo Breadcrumbs::widget(['itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links'links' =>$breadcrumps ,]);
     * @param $current_cat
     * @return array
     */
    private  function generate_breads_crump($current_cat){
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

}
