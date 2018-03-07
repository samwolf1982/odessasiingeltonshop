<?php
namespace app\components;

use dvizh\order\models\FieldValue;

class Simpletext extends \yii\base\Widget
{
    public $fieldValueModel = null;
    public $fieldModel = null;
    public $form = null;
    public $defaultValue = '';
    
    public function run()
    {
        $fieldValueModel = new FieldValue;
        $fieldValueModel->value = $this->defaultValue;


        return '<div class="clearfix"></div><div class="col-sm-12">
                            <div class="add_day">
                                <div class="pull-left2">
                                    '.$this->fieldModel->name.'
                                </div>
                            </div>
                        </div><div class="clearfix"></div>';

        return $this->form->field($fieldValueModel, 'value['.$this->fieldModel->id.']')->label($this->fieldModel->name)->textInput(['value' => $this->defaultValue, 'required' => ($this->fieldModel->required == 'yes')]);
    }
}
