<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\components\CategoryleftmenuWidget;
use dvizh\cart\widgets\CartInformer;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<style>


    /*overflow-x: scroll;*/
    /*overflow-y: auto;*/
    html{ overflow-y: scroll; overflow-x: auto; }
    body{
        margin-left: 0!important;
        margin-right: 0!important;

    }
    body{
        padding-right: 0 !important;
    }

</style>



<nav id="main_nav" class="navbar navbar-inverse navbar-fixed-top   ">
    <div class="container-fluid clear_pading">

        <div  class="wrap_top_nav descemenu hidden-xs hidden-sm">
            <div id="navbarflex" class="">
                <ul class="nav ">
                    <?php
                    // generate cur day
                      $dt_cur=date('d.m.Y');
                      $week_arr=[ 'Воскресенье','Понедельник', 'Вторник' ,'Среда' ,'Четверг' ,'Пятница' ,'Суббота'];
                      $week_cur=$week_arr[  date('N')];
                    ?>
                    <li class="text-center time"><a href="#"><?=$dt_cur;?> <br><?=$week_cur?></a></li>
                    <li class="social"><a href="#"><img src="/images/facebook-logo-button.png" alt="fb"></a><a href="#"><img src="/images/instagram-logo.png" alt="inst"></a></li>

                    <li ><a class="phone" href="#">(066) 330-96-99</a></li>
                    <li ><a class="phone" href="#">(048) 772-02-02</a></li>


                </ul>
                <div class="wrap_logo">
                    <a   class="hidden-sm hidden-xs" href="/"><img src="/images/logo.png" alt="logo"></a>
                </div>


                <ul class="nav">
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>

            </div>
        </div>

        <div class="wrap_top_nav mobilemenu hidden-lg hidden-md">



            <div class="navbar-header flexed">
                <a  class="navbar-brand hidden-lg hidden-md" href="#"><img class="img-responsive" src="/images/logo.png" alt="logo"></a>


                <div class="wrp_cart_mobi">


                    <a href="<?=Url::toRoute(['/cart'])?>" class="hidden" >  <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                    <?=CartInformer::widget(['htmlTag'=>'a','text'=>'{p}']);?>


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                </div>


            </div>


            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">Доставка и оплата</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>


            </div>
        </div>

        <div class="wrap_under_nav">
            <div id="navbar_under" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden"><a href="#" class="image_button"><img src="/images/user.png" alt="user"></a></li>
                    <li id="like_me" class="liked" title="<?=yii::$app->cart->getCountlike();?>"><a href="<?=Url::toRoute(['/wishlist'])?>" class="image_button" ><img src="/images/like.png" alt="like" id="like"></a></li>
                    <li class="liked count_prod_in_cart" title="<?=yii::$app->cart->getCount();?>"><a href="<?=Url::toRoute(['/cart'])?>" class="image_button"><img src="/images/restaurant (1).png" alt="restaurant"></a></li>

                    <li>
                        <span class="cart_order_name">Ваш заказ</span><br>
                        <?=CartInformer::widget(['htmlTag'=>'a','text'=>'{p}']);?>
                    </li>

                </ul>


                <div  class="navbar-form navbar-left">
                    <a href="/category"> <button type="button" class="btn btn-success our_menu">Наше меню</button> </a>
                </div>
                <div  class="navbar-form navbar-right hidden">
                    <a href="/">   <button type="button" class="btn btn-default complex_dinner_menu">Комплексные обеды</button></a>
                </div>
                <div  class="navbar-form navbar-right">
                    <button type="button" class="btn btn-warning check_order_menu">Оставить заявку</button>
                </div>

            </div>
        </div>


    </div>
</nav>

<style>
    #menu{
        position: absolute;
        z-index: 11;
        left: 10000px;

    }
</style>



<?= CategoryleftmenuWidget::widget(['name'=>'Наше меню']) ?>





<div class="container">
    <div class="row">
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>











<div class="clearfix"></div>
<!--Footer-->
<footer class="page-footer ">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-2 footer1 text-center">
                <img src="/images/logofot.png" alt="logo foot">
                <p class="footer_cocyrigth">© 2002 - 2018. Все права защищены.</p>
                <div class="social_footer">
                    <a href="#">  <img src="/images/google-maps.png" alt="googlemaps"></a>
                    <a href="#">    <img src="/images/instagram.png" alt="instagram"></a>
                    <a href="#">  <img src="/images/facebook.png" alt="facebook"></a>
                </div>
            </div>

            <div class="clearfix  hidden-lg"></div>
            <!--/.First column-->
            <div class="col-md-6 col-sm-6 col-xs-12  col-lg-2 footer2">
                <h5 class="title">O Babooshka</h5>
                <ul class="unstyled">
                    <li><a href="#"> О компании</a></li>
                    <li><a href="#"> Доставка и оплата</a></li>
                    <li><a href="#"> Акции</a></li>
                    <li><a href="#"> Новости</a></li>
                    <li><a href="#"> Контакты</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-2 footer3">
                <h5 class="title">Дополнительно</h5>
                <ul class="unstyled">
                    <li><a href="<?=Url::to(['/testimonials'])?>">Отзывы</a></li>
          
                </ul>
            </div>

            <div class="clearfix  hidden-lg"></div>
            <!--/.Second column-->

            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3 footer4">
                <h5 class="title place">Мы находимся по адресу:  </h5>
                <ul class="unstyled">
                    <li><a href="#"> 65000, Одесса, ул. Транспортная, д. 3   </a></li>
                </ul>

                <h5 class="title mail">По всем вопросам пишите:  </h5>
                <ul class="unstyled">
                    <li><a  href="mailto:zakaz@babooshka.com.ua"> zakaz@babooshka.com.ua  </a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <div class="col-md-6 col-sm-6 col-xs-12 col-lg-3 footer5 " >
                <h5 class="title time">Время работы:     </h5>
                <ul class="unstyled">
                    <li><a href="#"> 09:00 - 21:00   </a></li>
                </ul>

                <h5 class="title phone">Телефоны доставки:    </h5>
                <ul class="unstyled">
                    <li><a  href="#">(048) 772-02-02   </a></li>
                    <li><a  href="#">(066) 330-96-99    </a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
        <!--                <div class="clearfix"></div>-->
        <!--            <img class="pull-right car_footer_img" src="/images/footcar.png" alt="car footer">-->
        <!--            <hr class="footer-hr">-->

    </div>
    <!--/.Footer Links-->


    <!--Copyright-->

    <!--/.Copyright-->

</footer>
<!--/.Footer-->


<!--modal area-->

<div id="ajaxcontent" class="modal modal-dialog modal-lg cart_modal " tabindex="-1" role="dialog">

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
        .modal-body-down{
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
                <h2>    Оставить заявку</h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>




        </div>
        <div class="modal-body modal-body-up">
            <?= Html::beginForm(['/category/test'], 'post', [ 'class' => 'form','id'=>'modalorder',]); ?>
            <div class="col-sm-6 ">
                <?= Html::tag('span', 'Имя:',['class' => 'modallabel'])?><br>
                <?= Html::input('text', 'name', '', ['class' => 'form-control'])?>
                <?= Html::tag('span', 'Email:',['class' => 'modallabel'])?><br>
                <?= Html::input('email', 'mail', '', ['class' => 'form-control']) ?>

            </div>

            <div class="col-sm-6 ">
                <?= Html::tag('span', 'Телефон:',['class' => 'modallabel'])?><br>
                <?= Html::input('text', 'phone', '', ['class' => 'form-control','id'=>'modal-order-phone','required'=>true]) ?>
                <?= Html::tag('span', 'Удобное время для звонка:',['class' => 'modallabel'])?><br>


                <div class="form-group time_select_modal">
                    <div class='input-group date' id='datetimepicker_modal'>
                        <input type='text' name="time" class="form-control"  />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                    </div>
                </div>


            </div>

            <div class="col-sm-12 ">
                <?= Html::tag('span', 'Ваш коментарий / вопрос:',['class' => 'modallabel'])?><br>
                <?= Html::textarea('coment', '',  ['class' => 'form-control','rows' => '6', 'maxlength'=>"500"]) ?>
            </div>

            <div class="clearfix"></div>
            <div class="wrp_button_modal">

                <?= Html::submitButton('Отправить', ['id'=>'sendmodalorder', 'class' => 'btn btn-lg btn-primary', 'name' => 'hash-button']) ?>

            </div>

            <?= Html::endForm() ?>

            <div class="clearfix"></div>



        </div>
        <div class="modal-body modal-body-down ">


            <div class="col-sm-12 ">
<section>
    <p>
    Спасибо. Ваша заявка принята. В ближайшее время с Вами свяжется наш менеджер.
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






<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
