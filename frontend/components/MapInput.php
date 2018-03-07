<?php
namespace app\components;

use dvizh\order\models\FieldValue;

class MapInput extends \yii\base\Widget
{
    public $fieldValueModel = null;
    public $fieldModel = null;
    public $form = null;
    public $defaultValue = '';
    public $street_id = ''; // id поля улицы input
    public $distict_id = ''; // id поля района input

    public function run()
    {
        $fieldValueModel = new FieldValue;
        $fieldValueModel->value = $this->defaultValue;

        $defaultValue= $this->defaultValue;
        $fieldModel_id=$this->fieldModel->id;
        $fieldModel_name=$this->fieldModel->name;
        return $this->render('googlemap',compact('defaultValue','$fieldModel_id','fieldModel_id','fieldModel_name'));


        return '<div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label " for="address_text">'.$this->fieldModel->name.'</label>
                                <input value="'.$this->defaultValue.'" type="text" class="form-control" id="address_text" name="FieldValue[value]['.$this->fieldModel->id.']" placeholder="'.$this->fieldModel->name.'">
                            </div>
                        </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 wrap_map">
                    <div id="map"></div>
                </div>';
    }
}
