<?php
namespace app\components;

use dvizh\order\models\FieldValue;

class Inputext extends \yii\base\Widget
{
    public $fieldValueModel = null;
    public $fieldModel = null;
    public $form = null;
    public $defaultValue = '';
    
    public function run()
    {
        $fieldValueModel = new FieldValue;
        $fieldValueModel->value = $this->defaultValue;






        return '<div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label " for="inputext_'.$this->fieldModel->id.'">'.$this->fieldModel->name.'</label>
                                <input value="'.$this->defaultValue.'" type="text" class="form-control" id="inputext_'.$this->fieldModel->id.'" name="FieldValue[value]['.$this->fieldModel->id.']" placeholder="'.$this->fieldModel->name.'">
                            </div>
                        </div>';

        return $this->form->field($fieldValueModel, 'value['.$this->fieldModel->id.']')->label($this->fieldModel->name)->textInput(['value' => $this->defaultValue, 'required' => ($this->fieldModel->required == 'yes')]);
    }
}
