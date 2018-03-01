<?php

/* @var $this \yii\web\View */
/* @var $content string */

use dvizh\cart\widgets\CartInformer;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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

<nav id="main_nav" class="navbar navbar-inverse navbar-fixed-top   ">
    <div class="container-fluid clear_pading">

        <div  class="wrap_top_nav descemenu hidden-xs hidden-sm">
            <div id="navbarflex" class="">
                <ul class="nav ">
                    <li class="text-center time"><a href="#">24.01.2017 <br>среда</a></li>
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand hidden-lg hidden-md" href="#"><img src="/images/logo.png" alt="logo"></a>
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
                    <li class="liked" title="19"><a href="#" class="image_button" ><img src="/images/like.png" alt="like"></a></li>
                    <li class="liked" title="9"><a href="#" class="image_button"><img src="/images/restaurant (1).png" alt="restaurant"></a></li>

                    <li>
                        <span class="cart_order_name">Ваш заказ</span><br>
                        <?=CartInformer::widget(['htmlTag'=>'a','text'=>'{p}']);?>
                    </li>

                </ul>


                <div  class="navbar-form navbar-left">
                    <button type="button" class="btn btn-success our_menu">Наше меню</button>
                </div>
                <div  class="navbar-form navbar-right hidden-sm">
                    <a href="/">   <button type="button" class="btn btn-default complex_dinner_menu">Комплексные обеды</button></a>
                </div>
                <div  class="navbar-form navbar-right">
                    <button type="button" class="btn btn-warning check_order_menu">Оставить заявку</button>
                </div>

            </div>
        </div>


    </div>
</nav>


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
                <h5 class="title">Личный кабинет</h5>
                <ul class="unstyled">
                    <li><a href="#"> Вход </a></li>
                    <li><a href="#">Регистрация</a></li>
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

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
