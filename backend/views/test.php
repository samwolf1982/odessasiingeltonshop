index
[
'attribute' => 'images',
'format' => 'images',
'filter' => false,
'content' => function ($model) {
if($image = $model->getImage()->getUrl('50x50')) {
return "<img src=\"{$image}\" class=\"thumb\" />";
}
}
],


--form
<style>
    .wrap_galery br{
        display: none;
    }
</style>
<div class="leftmenu-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="col-sm-12 col-sm-6">  <?= $form->field($model, 'category_id')->textInput() ?></div>
    <div class="col-sm-12 col-sm-6"> <?= $form->field($model, 'sort')->textInput() ?></div>

    <div class="col-sm-12 col-sm-6">     <?= $form->field($model, 'text')->textInput(['placeholder'=>'не обязательно, по умолчанию будет установлено название категории']) ?></div>
    <div class="col-sm-12 col-sm-6 wrap_galery">     <?=Gallery::widget(['model' => $model]); ?></div>

    <div class="clearfix"></div>





    <div class="col-sm-12 ">
        <div class="form-group pull-left ">
            <?= Html::submitButton('Cохранить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>




    <?php ActiveForm::end(); ?>

</div>