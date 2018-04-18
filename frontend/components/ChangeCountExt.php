<?php
namespace app\components;
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 22.02.2018
 * Time: 19:10
 */

use dvizh\cart\widgets\ChangeCount;
use yii\base\Widget;
use yii\helpers\Html;
use Yii;
use yii\helpers\Url;

class ChangeCountExt extends ChangeCount
{
//    public $customView = '@frontend/views/custom/changeCountLayout'; // for example '@frontend/views/custom/changeCountLayout'
    public $customView = false; // for example '@frontend/views/custom/changeCountLayout'
    public $cssClass = 'input-group';
    public $downArr = '';
    public $upArr = '';
    public $parent_id = '';
    public $text = '';
    public function init()
    {
        parent::init();
        \frontend\assets\ChangeCountExtAsset::register($this->getView());
        return true;

    }
    public function run()
    {
        if($this->showArrows) {
            $downArr = Html::a($this->downArr, '#', ['class' => 'dvizh-arr dvizh-downArr input-group-addon  input-group-addon_f']);
            $upArr = Html::a($this->upArr, '#', ['class' => 'dvizh-arr dvizh-upArr input-group-addon input-group-addon_l']);
        } else {
            $downArr = $upArr = '';
        }

        if(!$this->model instanceof \dvizh\cart\interfaces\CartElement) {
            $input = Html::activeTextInput($this->model, 'count', [
                'type' => 'text',
                'class' => 'dvizh-cart-element-count',
                'data-role' => 'cart-element-count',
                'data-line-selector' => $this->lineSelector,
                'data-id' => $this->model->getId(),
                'data-parent_id' => $this->parent_id,
                'data-href' => Url::toRoute($this->actionUpdateUrl),
            ]);
        } else {

            $input = Html::input('text', 'count', $this->defaultValue, [
                'class' => 'dvizh-cart-element-before-count',
                'data-line-selector' => $this->lineSelector,
                'data-parent_id' => $this->parent_id,
                'data-id' => $this->model->getCartId(),
            ]);
        }

        if ($this->customView) {

            return $this->render($this->customView, [
                'model' => $this->model,
                'defaultValue' => $this->defaultValue,
            ]);
        } else {
            return Html::tag('div', '  <span class="count_food_text">'.$this->text. '</span>'.$downArr.$input.$upArr, ['class' => $this->cssClass]);
        }
    }
}