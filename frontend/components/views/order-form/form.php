<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<?php if(Yii::$app->session->hasFlash('orderError')) { ?>
    <?php
    $errors = Yii::$app->session->getFlash('orderError');
    $orderModel->addErrors(unserialize($errors));
    ?>
<?php } ?>
<div class="dvizh_order_form">

        <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />

        <div class="row">
            <div class="col-lg-12"><?= $form->field($orderModel, 'client_name')->textInput(['placeholder' => 'Фамилия Имя Отчество','required'=>true]) ?></div>
            <div class="col-lg-6"><?= $form->field($orderModel, 'phone')->textInput(['placeholder' => 'Ваш номер телефона','required'=>true]) ?></div>
            <div class="col-lg-6"><?= $form->field($orderModel, 'email')->textInput(['placeholder' => 'Ваш e-mail','required'=>true]) ?></div>
        </div>

        <div class="row">
            <?php if($shippingTypes) { ?>
                <div class="col-md-6 order-widget-shipping-type">
                    <?php // $form->field($orderModel, 'shipping_type_id')->dropDownList($shippingTypes, ['onchange'=>'dvizh.cart.changeInputValue();dvizh.cart.renderCart();']) ?>
                    <?= $form->field($orderModel, 'shipping_type_id')->dropDownList($shippingTypes, ['onchange'=>'dvizh.cart.changeInputValue();dvizh.cart.renderCart();']) ?>
                    <script>
                        shippintTypeCost = [];
                        <?php foreach($shippingTypesList as $sht) { ?>
                            shippintTypeCost[<?=$sht->id;?>] = <?=(int)$sht->cost;?>;
                        <?php } ?>
                    </script>
                </div>
            <?php } ?>


            <?php if($paymentTypes) { ?>
                <div class="col-md-6">
                    <?= $form->field($orderModel, 'payment_type_id')->dropDownList($paymentTypes) ?>
                </div>
            <?php } ?>
        </div>
         <?php $clear=0; ?>
        <?php if($fields = $fieldFind->all()) { ?>
            <div class="row order-custom-fields">
                <?php foreach($fields as $fieldModel) {   ?>
                        <?php

                         if ( in_array($fieldModel->id,$otherplace_id_elements) ){
                             continue;
                         }


                        if($widget = $fieldModel->type->widget) {
                            echo $widget::widget(['form' => $form, 'fieldModel' => $fieldModel]);
//                            Yii::error(['in instance',$fieldModel->type->widget]);
                            $w_type='app\components\Simpletext';
                            if ($widget != $w_type){
                                if (++$clear>=2){
                                    echo '<div class="clearfix"></div>';
                                    $clear=0;
                                }
                            }else{
                                $clear=0;
                            }
                            unset($w_type);
                        }
                        else {
                            echo '<div class="clearfix"></div>';

                            echo $form->field($fieldValueModel, 'value['.$fieldModel->id.']')->label($fieldModel->name)->textInput(['required' => ($fieldModel->required == 'yes')]);
                            $clear=0;
                            echo '<div class="clearfix"></div>';
                        }
                        ?>
                        <?php if($fieldModel->description) { ?>
                            <p><small><?=$fieldModel->description;?></small></p>
                        <?php } ?>

                <?php } ?>
            </div>
        <?php } ?>
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-12"><?= $form->field($orderModel, 'comment')->textArea() ?></div>
        </div>

    <style>
        .dvizh_order_form a.btn-default.continue_order {
                padding-top: 5px;
        }
    </style>

        <div class="row">
            <div class="col-lg-12">
                <?= Html::submitButton(Yii::t('order', 'Create order'), ['class' => 'btn btn-success ']) ?>
                <?php if($referrer = Yii::$app->request->referrer) { ?>
                    <?= Html::a(Yii::t('order', 'Continue shopping'), Html::encode($referrer), ['class' => 'btn btn-default continue_order']) ?>
                <?php } ?>
            </div>
        </div>
</div>