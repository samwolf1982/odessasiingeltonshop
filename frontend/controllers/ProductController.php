<?php

namespace frontend\controllers;
use common\models\Productext;
use common\models\Productsimple;
use common\models\Testimonials;
use dvizh\shop\models\modification\ModificationSearch;
use Yii;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;
use yii\web\Cookie;
use yii\web\Response;


class ProductController extends \yii\web\Controller
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

    /**
     * Displaysproduct page
     *
     * @return mixed
     */
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


        if($id=yii::$app->request->get('id')) {
            $product = Productsimple::find()->where(['id'=>$id])->one();
            if (empty($product)){
                return $this->render('nothing');
            }



        } else {
            return $this->render('nothing');

        }


        // установка опционых цен
            // возможны баги с порядком
      //  yii::trace(get_class($product));
       // yii::trace($product->modifications);


        foreach ($product->modifications as $modification) {
            /** @var dvizh/shop/models/Modification  $modification **/
//          yii::error($product->modifications->variants);
//          yii::error([$modification]);
            $product->price=$modification->price;
            //$product->price=$modification->price;
          //  break;
           // yii::trace([$modification->name,$modification->id,$modification->value,]);
        }



//// код из админки
//        [['id', 'product_id', 'sort'], 'integer'],
//            [['name', 'available'], 'safe'],
//        $searchModificationModel = new ModificationSearch();
//        $typeParams['ModificationSearch']['product_id'] = $id;
//        $modificationDataProvider = $searchModificationModel->search($typeParams);

        //foreach ($modificationDataProvider->getModels() as $mod){
               // yii::error(['id'=>$mod->id,'sort'=>$mod->sort]);
       // }



// код из админки



//        foreach ($product->getModifications()->where(1)->all() as $modification) {
//            /** @var dvizh/shop/models/Modification  $modification **/
//            yii::error([$modification->sort]);
//            $product->price=$modification->price;
//        }


           // foreach($product->getModifications()->andWhere(['available' => 'yes'])->all() as $modification) {
          //  $product->price=$modification->price;

//            }

       // $product->price=456;
//yii::error(['pp'=>$product]);


        $query = Product::find()->orderBy('id DESC');
        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }

     //  Yii::error($product->relations);




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
      //  $productsext = Productext::find()->where(['in','id',[23,24,28,29,30,31,34,35]])->all();
        $active_id_complex=23;
        if (isset($_GET['id'])){
            $active_id_complex=$_GET['id'];
        }

        // breadcrumps
        $current_cat = Category::find()->where(['id'=>$product->category_id])->one();
        $breadcrumps=$this->generate_breads_crump($current_cat,$product->name);



        //-    отзывы для продкута
        $t_ar=[];
        if (isset($_GET['id'])){
           // yii::error($_GET['id']);
            $res_test=Testimonials::find()->where(['id_product'=>$_GET['id'],'status'=>1])->orderBy(['id'=>SORT_DESC]) ->limit(2) ->all();
            if ($res_test){
                $t_ar= $res_test;
            }
        }
//yii::error($t_ar);


        //----------



        return $this->render('index', [
            'product'=>$product,
            'breadcrumps'=>$breadcrumps,

            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'testimonials' => $t_ar,
            'productsext'=>[],
            'active_id_complex'=>$active_id_complex,
        ]);
    }

    /**
     * generate bread crump array for breadcrump widget
     * example to use  --->   echo Breadcrumbs::widget(['itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links'links' =>$breadcrumps ,]);
     * @param $current_cat
     * @return array
     */
    private  function generate_breads_crump($current_cat,$prod_name){
        $breadcrumps[]=['label' => $prod_name];
        // глубина категорий 10
        $c=$current_cat;
        for($i=0; $i<=10; $i++){
//
                $tmp=[ 'label' => $c->name,'url' => ['category/', 'categoryId' => $c->id],];
            array_unshift($breadcrumps,$tmp);
            if (is_null( $c->parent_id)){ break;}
            $c=$c->parent;
        }

        $tmp=[ 'label' => 'Наше меню','url' => ['/category'],];
        array_unshift($breadcrumps,$tmp);
        unset($c); unset($tmp);
        $cp= $current_cat->parent_id;
        return          $breadcrumps;
    }


    public function actionGetprice($id,$model)
    {




        if($id=yii::$app->request->get('id')) {
            $product = Productsimple::find()->where(['id'=>$id])->one();
            if (empty($product)){
                return $this->render('nothing');
            }



        } else {
            return $this->render('nothing');

        }


        // установка опционых цен
        // возможны баги с порядком
        foreach($product->getModifications()->andWhere(['available' => 'yes'])->all() as $modification) {
            $product->price=$modification->price;
            yii::error(['pp'=>$modification->price]);
//            $product->price=789;
            //$product->price=$modification->price;
        }

        // $product->price=456;
        yii::error(['pp'=>$product]);


        $query = Product::find()->orderBy('id DESC');
        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
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

        // breadcrumps
        $current_cat = Category::find()->where(['id'=>$product->category_id])->one();
        $breadcrumps=$this->generate_breads_crump($current_cat,$product->name);

        //----------
        return $this->render('index', [
            'product'=>$product,
            'breadcrumps'=>$breadcrumps,

            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'productsext'=>$productsext,
            'active_id_complex'=>$active_id_complex,
        ]);
    }




}
