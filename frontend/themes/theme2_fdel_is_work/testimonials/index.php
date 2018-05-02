<?php

use frontend\assets\MainpageAsset;
use frontend\assets\TestimonialsAsset;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TestimonialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы наших клиентов';
$this->params['breadcrumbs'][] = $this->title;
//MainpageAsset::register($this);
TestimonialsAsset::register($this);
?>


<br>




<div class="col-sm-12 main">
    <?php
    echo Breadcrumbs::widget([
        'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
        'links' =>$breadcrumps ,
    ]);
    ?>

    <div class="food_block_header text-center">
        <div class="nice">Babooshka </div>
        <h2><?=$this->title;?></h2>
        <div class="bottom_food_block_header">
            <img src="/images/food.png" alt="Комплексные обеды">
        </div>
    </div>

    <div class="pull-right ">
        <a href="#" class="plus_btn btn add_testimonial"><div >+</div></a><span class='green_color' >Оставить отзыв</span>
    </div>

<div class="clearfix"></div>

    <div class="tm">
        <?php foreach ($dataProvider->getModels() as $tm) { ?>
            <section class="coment_section">
                <a href="#" ><p>
                        <span class="name_user"><?=$tm->name?></span>  <i class="fa fa-calendar" aria-hidden="true"></i>  <span class="time_coments"><?=date_format( date_create($tm->created_at),"d.m.Y") ?></span>
                    </p></a>
                <div class="comment_text">
                    <?=$tm->comment?>
                </div>
            </section>

        <?php } ?>
    </div>
<div class="clearfix"></div>

   <div class="text-center">
       <?php
       // отображаем ссылки на страницы
       echo LinkPager::widget([
           'pagination' => $pages,
       ]);
       ?>
   </div>


</div>



<!-- modal -->
<div id="add_testimonial" class="modal modal-dialog modal-lg cart_modal " tabindex="-1" role="dialog">

    <style>
        .wrp_button_modal{
            text-align: center;
        }
        .btn-lg{
            border-radius: 25px;
        }

        /* Preloader */

        #preloader {
            position: relative;
            display: none;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            /* change if the mask should have another color then white */
            z-index: 99;
            /* makes sure it stays on top */
        }

        #status {
            position: absolute;
            width: 100%;
            height: 187px;
            /* position: relative; */
            top: 222px;
            background-image: url(https://raw.githubusercontent.com/niklausgerber/PreLoadMe/master/img/status.gif);
            background-repeat: no-repeat;
            background-position: center;
            /* margin: -100px 0 0 -100px; */
        }
        .modal-body-down2{
            display: none;
        }

        .time_select_modal .input-group-addon{
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

    </style>



    <div class="modal-content">
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="Custombox.modal.close();">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <h2>    Оставить отзыв</h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>




        </div>
        <div class="modal-body modal-body-up2">
            <?= Html::beginForm(['/category/test'], 'post', [ 'class' => 'form','id'=>'add_testimonial_form',]); ?>
            <div class="col-sm-6 ">
                <?= Html::tag('span', 'Имя:',['class' => 'modallabel'])?><br>
                <?= Html::input('text', 'name', '', ['class' => 'form-control','required'=>true])?>


            </div>

            <div class="col-sm-6 ">
                <?= Html::tag('span', 'Телефон:',['class' => 'modallabel'])?><br>
                <?= Html::input('text', 'phone', '', ['class' => 'form-control','id'=>'modal-order-phone','required'=>true]) ?>



            </div>

            <div class="col-sm-12 ">
                <?= Html::tag('span', 'Ваш отзыв:',['class' => 'modallabel'])?><br>
                <?= Html::textarea('coment', '',  ['class' => 'form-control','rows' => '6', 'minlength'=>"25", 'maxlength'=>"500" ,'required'=>true]) ?>
            </div>

            <div class="clearfix"></div>
            <div class="wrp_button_modal">

                <?= Html::submitButton('Отправить', ['id'=>'sendmodalorder', 'class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>

            </div>

            <?= Html::endForm() ?>

            <div class="clearfix"></div>



        </div>
        <div class="modal-body modal-body-down2 ">


            <div class="col-sm-12 ">
                <section>
                    <p>
                        Спасибо. Ваш отзыв принят и будет размещен после модерации.
                    </p>
                </section>
            </div>

            <div class="clearfix"></div>
            <div class="wrp_button_modal">
                <?= Html::button('Закрыть', ['onclick'=>"Custombox.modal.close();" , 'class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>

            </div>



            <div class="clearfix"></div>



        </div>
        <div class="clearfix"></div>
        <div class="modal-footer">

        </div>
    </div>

</div>



