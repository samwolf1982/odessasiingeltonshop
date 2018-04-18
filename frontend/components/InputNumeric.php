<?php
namespace app\components;

use dvizh\order\models\FieldValue;

class InputNumeric extends \yii\base\Widget
{
    public $fieldValueModel = null;
    public $fieldModel = null;
    public $form = null;
    public $defaultValue = '';
    public $change_bootstrap;
    public $other_place;
    // js frontend/web/js/changecountext.js !!! init on cartfix

    public function init(){
        parent::init();
        if ($this->change_bootstrap === null) {
            $this->change_bootstrap ='col-sm-6';
        }
    }


    public function run()
    {
        $fieldValueModel = new FieldValue;
        $fieldValueModel->value = $this->defaultValue;

       // .food_area .food_block .food

        if (empty($this->defaultValue)){
            $this->defaultValue=0;
        }

        return '<style>.incr-btn:hover,.incr-btn:focus{text-decoration: none;} .counter_food_block .food{background-color: transparent!important;border: none!important;display: flex!important;justify-content: flex-end!important;}.wrp_fields_different{padding-bottom: 3em!important;}   </style>  <div class="'.$this->change_bootstrap.' counter_food_block food_block "> <div class="food ">   <div class="input-group">  <span class="count_food_text"></span>
<a class="incr-btn    input-group-addon  input-group-addon_f" data-action="decrease" href="#"></a>
<input type="text"  class="quantity dvizh-cart-element-count" value="'.$this->defaultValue.'" name="FieldValue[value]['.$this->fieldModel->id.']" >
<a class="incr-btn   input-group-addon input-group-addon_l" href="#" data-action="increase"></a>
                </div></div></div>';

return '<div class="count-input space-bottom">
                        <a class="incr-btn inactive" data-action="decrease" href="#">–</a>
                        <input class="quantity" type="text" name="quantity" value="1">
                        <a class="incr-btn" data-action="increase" href="#">+</a>
                        <input type="hidden" name="product_id" value="47">
                      </div>';




        return '<div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label " for="inputext_'.$this->fieldModel->id.'">'.$this->fieldModel->name.'</label>
                                <input value="'.$this->defaultValue.'" type="text" class="form-control" id="inputext_'.$this->fieldModel->id.'" name="FieldValue[value]['.$this->fieldModel->id.']" placeholder="'.$this->fieldModel->name.'">
                            </div>
                        </div>';


        return $this->form->field($fieldValueModel, 'value['.$this->fieldModel->id.']')->label($this->fieldModel->name)->textInput(['value' => $this->defaultValue, 'required' => ($this->fieldModel->required == 'yes')]);
    }

}
