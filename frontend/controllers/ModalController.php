<?php

namespace frontend\controllers;


use common\models\Categorysimple;
use common\models\Modalorder;
use common\models\Productsimple;
use common\models\Testimonials;
use Yii;
use common\models\Productext;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;
use frontend\models\ContactForm;
use yii\web\Response;

// RM!!
class ModalController extends \yii\web\Controller
{

    public function actionIndex()
    {
      $res=['status'=>false,];
    // todo запись в бд
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
          $md=new Modalorder();
          $md->phone=$data['phone'];
          $md->time_user=$data['time'];
          $md->name=$data['name'];
          $md->email=$data['mail'];
          $md->comment=$data['coment'];
          $md->status=0;
          $md->sort=0;
          $md->time=date("Y-m-d H:i:s");

          if ($md->validate() &&   $md->save()){
                  //send mail

              $res['status']=true;
          }else{
              $res['error']=$md->errors;
          }


        }



     return  $res;


    }
    public function actionTestimonial()
    {
        $res=['status'=>false,];
        // todo запись в бд
        if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();
            $md=new Testimonials();
            $md->id_product=isset( $data['id_product'])?$data['id_product']:0;
            $md->name=$data['name'];
            $md->comment=$data['coment'];
            $md->created_at=date("Y-m-d H:i:s");
            $md->status=0;
            if ($md->validate() &&   $md->save()){
                //send mail

                $res['status']=true;
            }else{
                $res['error']=$md->errors;
            }
        }



        return  $res;


    }
    public function beforeAction($action)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

}
