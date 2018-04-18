<?php
namespace app\components;

use Codeception\Lib\Interfaces\ActiveRecord;
use dvizh\cart\models\Cart;
use dvizh\cart\widgets\CartInformer;
use yii\db\BaseActiveRecord;
use yii\helpers\Html;
use yii\helpers\Url;
use yii;

class ShopNotificator implements  yii\base\BootstrapInterface
{



    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
//                     $t=new Cart();
//                $t->on(ActiveRecord::EVENT_AFTER_INSERT,function ($event){
//            Yii::$app->myComponent->fromevent=sprintf('from event %d',rand());
//        });
        //EVENT_CART_PUT
        // TODO: Implement bootstrap() method.
        yii\base\Event::on(
            Cart::className(),
            yii\db\ActiveRecord::EVENT_AFTER_INSERT,[$this,'addToCart']
        );
    }

    public function addToCart(yii\base\Event $event){


        yii::error(['ShopNotificator add to cart',$event]);
    }
}
