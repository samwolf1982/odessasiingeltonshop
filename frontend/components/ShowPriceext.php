<?php
namespace app\components;

use dvizh\shop\widgets\ShowPrice;
use yii\helpers\Html;
use yii\helpers\Url;
use yii;

class ShowPriceext extends ShowPrice
{
    public $model = NULL;
    public $htmlTag = 'span';
    public $cssClass = '';

    public function init()
    {
        parent::init();
        \dvizh\shop\assets\WidgetAsset::register($this->getView());

    }

    
    public function run()
    {
        $js = 'dvizh.modificationconstruct.dvizhShopUpdatePriceUrl = "' .Url::toRoute(['/shop/tools/get-modification-by-options']). '";';

        $this->getView()->registerJs($js);


        return Html::tag(
                $this->htmlTag,
                $this->model->getPrice(),
              //  $this->model->getPriceext(),
                ['class' => "dvizh-shop-price dvizh-shop-price-{$this->model->id} {$this->cssClass}"]
            );
    }
}
