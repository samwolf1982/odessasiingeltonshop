<?php
namespace frontend\controllers;

use common\models\Productext;
use common\models\Topmenutoslider;
use Yii;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;
use yii\web\Cookie;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
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
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
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



        $productsext = Productext::find()->where(['category_id'=>Yii::$app->params['ext_category_id']])->all();
        $active_id_complex=$productsext[0]->id;
        if (isset($_GET['id'])){
            $active_id_complex=$_GET['id'];
        }
        $top_menu_to_slider_widget_bottom=[];
        $temp_top_menu_to_slider_widget_bottom=Topmenutoslider::find()->where(1)->orderBy(['sort'=>SORT_ASC])->all();
        if ($temp_top_menu_to_slider_widget_bottom)
        {
            // todo оптимизировать запрос в один
            foreach ($temp_top_menu_to_slider_widget_bottom as $item_top_cat) {
                      $c_temp=Category::find()->select(['name'])->where(['id'=>$item_top_cat->category_id])->one();
                      if ($c_temp){$top_menu_to_slider_widget_bottom[]=['cat_id'=>$item_top_cat->category_id,'name'=>$c_temp->name];}
           }
        }
        //----------
        return $this->render('index', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'productsext'=>$productsext,
            'active_id_complex'=>$active_id_complex,
            'top_menu_to_slider_widget_bottom'=>$top_menu_to_slider_widget_bottom,
        ]);
    }


    /**
     * обновление корзины
     *
     * @return array
     */
    public function actionUpdateextproduct()
    {

        if ($_GET['newvalue']<=0){$_GET['newvalue']=1;} // если количество нулевое
        Yii::$app->response->format = Response::FORMAT_JSON;
        $session = Yii::$app->session;
        $ext_prod = $session->get('prodext');
        $ext_prod[$_GET['prod_id']]=['count'=>$_GET['newvalue']];
        $session->set('prodext',$ext_prod);

        if (isset($_GET['distance'])){ // растояние
            $session->set('distance',$_GET['distance']);
        }
        $prod=  Productext::find()->where(['id'=>$_GET['parent_id']])->one();
        $delivery_id=isset($_GET['delivery_id'])?$_GET['delivery_id']:'';
        $session->set('orderShippingType',$delivery_id);



        if ($prod){
            $items = ['prod_id'=>$_GET['prod_id'],'newvalue'=>$_GET['newvalue'],'parent_id'=>$_GET['parent_id'],'new_price'=>$prod->getPrice(),'count'=>$_GET['newvalue'],'delivery'=>$delivery_id];
        }else{
            $items = ['prod_id'=>$_GET['prod_id'],'newvalue'=>$_GET['newvalue'],'parent_id'=>0,'new_price'=>0,'count'=>$_GET['newvalue'],'delivery'=>$delivery_id];
        }

        return $items;
    }
    public function actionThanks()
    {
        return $this->render('thanks');
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
