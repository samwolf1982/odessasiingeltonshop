<?php
namespace app\components;

use dvizh\order\models\FieldValue;

class Inputtime extends \yii\base\Widget
{
    public $fieldValueModel = null;
    public $fieldModel = null;
    public $form = null;
    public $defaultValue = '';
    public $change_bootstrap;
    public $other_place;


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


        return '<div class="'.$this->change_bootstrap.'"> <div class="wrap_time_select">
                                        <div class="form-group ">
                                        <label class="control-label" for="datetimepicker'.$this->fieldModel->id.'">'.$this->fieldModel->name.'</label> 
                                            <div class="input-group date datetimepicker" id="datetimepicker'.$this->fieldModel->id.'">
                                                <input type="text" class="form-control" name="FieldValue[value]['.$this->fieldModel->id.']">
                                                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                                            </div>
                                        </div>
                                    </div> 
                                    </div>';

        return $this->form->field($fieldValueModel, 'value['.$this->fieldModel->id.']')->label($this->fieldModel->name)->textInput(['value' => $this->defaultValue, 'required' => ($this->fieldModel->required == 'yes')]);
    }
}
