<?php

use app\components\CartInformerExt;
use app\components\ChangeCountExt;
use app\components\DeliveryInformer;
use app\components\TotalPayExtInformer;
use app\components\TotalPayInformer;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\DeleteButton;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\order\models\Field;
use dvizh\order\models\FieldValue;
use dvizh\order\widgets\OrderForm;

use frontend\assets\CartAsset;
use frontend\assets\CartfixAsset;
use frontend\assets\TempAsset;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = yii::t('cart', 'Cart');


//$this->registerCssFile('/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
//$this->registerJsFile('/js/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

$this->registerJsFile('js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
$this->registerJsFile('js/lazy/jquery.lazy.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);
$this->registerJsFile('js/cartinitial.js',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

$this->registerCssFile('/js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css',  ['position' => yii\web\View::POS_END, 'depends' => ["frontend\assets\AppAsset"]]);

CartAsset::register($this);
CartfixAsset::register($this);

//TempAsset::register($this);


?>



<?php $form = ActiveForm::begin(['action' => Url::toRoute(['/order/order/create']),'options' => [
    'validateOnSubmit' => true,
    'class' => 'form'
],]); ?>
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item hidden"><a href="/category">Наше меню</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Оформление  заказа</li>
                </ol>
            </nav>
        </div>

        <div class="col-sm-12  main">
            <div class="col-sm-12 col-md-6 left_cart">
                <div class="food_block2">
                    <div class="wrp_info_select_day">
                        <div class="nice">Babooshka</div>
                        <div class="add_day">
                            <div class="pull-left">
                                Ваш заказ
                            </div>
                            <div class="pull-right hidden">
                                <a href="#" class="plus_btn btn"><div >+</div></a>   <span class= >добавить день</span>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="select_day">
                        <div class="under_select_day">
                            <div class="owl-carousel owl-theme food_block">
                                <?php  foreach (range(1,7)  as $key=> $item) { ?>
                                    <div class="food ">
                                        <button type="button" class="btn btn-success  <?= $key!=0 ? 'inactive':''?>">27.01.2018</button>
                                    </div>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <h1 class="text-center hidden"><?= yii::t('cart', 'Cart'); ?></h1>
                    <div class="food_area">
                        <div class="food_block">
                            <?php foreach($elements as $element) { ?>
                                <div class="food yellow" style="min-height: 170px;" id="remove_cart_id_<?=$element->id?>" >
                                    <div class="wrp_img_order">
                                        <a href="<?=Url::toRoute(['/product', 'id' => $element->item_id]);?>">  <img  src="<?=$element->getModel()->getImage()->getUrl('170x170');?>" alt="food"> </a>
                                    </div>

                                    <div class="caption">
                                        <h4><a href="<?=Url::toRoute(['/product', 'id' => $element->item_id]);?>"><?=$element->getModel()->getCartName();?></a></h4>

                                        <div class="input-group">
                                            <span class="count_food_text hidden">количество: </span>
                                            <div class="price text-left">

                                               <span id="cart_price_<?=$element->id; ?>"><?php echo number_format(($element->getPrice() * $element->count), 0, '.', '')  ;?></span>  грн.

                                                <?php // echo $element->getPrice(); ?>
                                            </div>
                                            <?=ChangeCountExt::widget(['model' => $element,'parent_id'=>0]);?>

                                        </div>

                                        <div class="short_desc text-left hidden">
                                            <p>
                                               <?=$element->getModel()->short_text; ?>
                                            </p>

                                        </div>
                                    </div>
                                    <div class="delete">
                                    <?=DeleteButton::widget(['model' => $element, 'text'=>'&nbsp;','cssClass'=>'delete_btn btn','lineSelector'=>'div']);?>
                                    </div>

                                </div>
                            <?php }  ?>

                        </div>
                        <div class="clearfix"></div>


                        <div class="footer_foodarea">
                            <div class="row ">



                                <div class="clearfix"></div>


                                <div class="col-sm-12 price_area">
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span>Сумма заказа:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                            <?=CartInformerExt::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span>Доставка:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                                     <?=DeliveryInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">

                                            <?php
                                            $dt_cur=date('d.m.Y');
                                            $week_arr=[ 'Воскресенье','Понедельник', 'Вторник' ,'Среда' ,'Четверг' ,'Пятница' ,'Суббота'];
                                            $week_cur=$week_arr[  date('N')];
                                            ?>

                                            <span> К оплате за <?=$dt_cur?>:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select">
                                            <?=TotalPayExtInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="col-sm-6 pull-left">
                                        <div class="wrp_time_text">
                                            <span class="text_total_price">ВСЕГО:</span>
                                        </div>

                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="wrap_time_select total_price">
                                            <?=TotalPayInformer::widget(['text'=>'{p}']); ?>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr style="border-color: grey;">



                                            <?php // FIX AREA  перенос из виджета заказа полей  пока что такой вариант  ?>
                                            <?php
                                            $otherplace_id_elements=[16,2,19,20,21];
                                            $fieldFind = Field::find()->orderBy('order DESC');
                                            $fieldValueModel = new FieldValue;    ?>
                                            <?php $clear=0; ?>
                                            <?php if($fields = $fieldFind->all()) { ?>
                                                    <?php foreach($fields as $fieldModel) {   ?>
                                                        <?php
                                                        if ( !in_array($fieldModel->id,$otherplace_id_elements) ){
                                                            continue;
                                                        }
                                                        if($widget = $fieldModel->type->widget) {
                                                            yii::error($widget);
                                                           // echo $widget::widget(['form' => $form, 'fieldModel' => $fieldModel]); ?>

<div class="wrp_fields_different">
                                                                <div class="col-sm-6 pull-left">
                                                                    <div class="wrp_time_text">
                                                                        <span class="text_total_price"><?=$fieldModel->name?></span>
                                                                    </div>
                                                                </div>
    <div class="col-sm-6 pull-right">
                                                                    <?php echo $widget::widget(['form' => $form, 'fieldModel' => $fieldModel,'change_bootstrap'=>'','other_place'=>true]);; ?>
    </div>

</div>


                                                            <div class="clearfix"></div>
                                                       <?php  }
                                                        else { ?>

                                                     <?php   }  ?>

                                                    <?php } ?>
                                            <?php } ?>

                                    <div class="clearfix"></div>




                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12 return_area text-center">
                                    <?php if($referrer = Yii::$app->request->referrer) { ?>
                                        <p><a href="<?=Html::encode($referrer)?>">Продолжить покупки</a></p>
                                    <?php } ?>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>






            </div>
            <!--     right parrt-->


            <div class="col-sm-12 col-md-6 right_cart">
                <div class="food_block2">
                    <div class="wrp_info_select_day">
                        <div class="nice">Babooshka</div>
                        <div class="add_day">
                            <div class="pull-left">
                                Оформление заказа
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="add_day">
                            <p class="info-min-price hidden">
                                Минимальная сумма заказа - 300 грн
                            </p>
                            <p style="text-indent: 5px;">
                                Время приготовления и доставка зависит от времени суток и заказаных блюд и составляет не менее двух часов.
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form_area">
                        <?=OrderForm::widget(['view'=>'@app/components/views/order-form/form','form'=>$form,'otherplace_id_elements'=>[16,2,19,20,21]]);?>
                    </div>
                    <hr style="border-color: grey;">
                    <div class="clearfix"></div>





                </div>






            </div>
            <!--       end main-->
        </div>

<?php ActiveForm::end();?>





