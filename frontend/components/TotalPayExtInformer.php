<?php
namespace app\components;

use dvizh\cart\widgets\CartInformer;
use yii\helpers\Html;
use yii\helpers\Url;
use yii;

class TotalPayExtInformer extends CartInformer
{

    public $text = NULL;
    public $offerUrl = NULL;
    public $cssClass = NULL;
    public $htmlTag = 'span';
    public $showOldPrice = true;

    public function init()
    {
        parent::init();
        return true;
    }
//dvizh-cart-count
//dvizh-cart-price
    public function run()
    {
        $cart = yii::$app->cart;

        if($this->showOldPrice == false | $cart->cost == $cart->getCost(false)) {
            $this->text = str_replace(['{c}', '{p}'],
                ['<span class="dvizh-cart-delivery-count">'.$cart->getCount().'</span>', '<strong class="dvizh-cart-price-ext">'.$cart->getCostFormatted().'</strong>'],
                $this->text
            );
        } else {
            $this->text = str_replace(['{c}', '{p}'],
                ['<span class="dvizh-cart-delivery-count">'.$cart->getCount().'</span>', '<strong class="dvizh-cart-price-ext"><s>'.$cart->getCostFormatted(false).'</strong>'],
                $this->text
            );
        }
        
        return Html::tag($this->htmlTag, $this->text, [
                'href' => $this->offerUrl,
                'class' => "dvizh-cart-informer {$this->cssClass}",
        ]);
    }
}
