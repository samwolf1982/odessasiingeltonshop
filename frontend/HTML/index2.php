<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap-3.3.7/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>



    <script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
    <script>
        // WebFont.load({
        //     custom: {
        //         families: ['MuseoSansCyrl-500'],
        //         urls : ['fontsulpoad.css']
        //     }
        // });
    </script>






    <link href="fontsulpoad.css" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap griid  -->
    <link href="bootstrap-grid_custom.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap-3.3.7/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">






    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="temp/temp.css" rel="stylesheet">



    <link rel="stylesheet" href="js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css" />


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap-3.3.7/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap-3.3.7/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<nav id="main_nav" class="navbar navbar-inverse navbar-fixed-top   ">
    <div class="container-fluid clear_pading">

        <div  class="wrap_top_nav descemenu hidden-xs hidden-sm">
            <div id="navbarflex" class="">
                <ul class="nav ">
                    <li class="text-center time"><a href="#">24.01.2017 <br>среда</a></li>
                    <li class="social"><a href="#"><img src="images/facebook-logo-button.png" alt="fb"></a><a href="#"><img src="images/instagram-logo.png" alt="inst"></a></li>

                    <li ><a class="phone" href="#">(066) 330-96-99</a></li>
                    <li ><a class="phone" href="#">(048) 772-02-02</a></li>


                </ul>
                <div class="wrap_logo">
                    <a   class="hidden-sm hidden-xs" href="#"><img src="images/logo.png" alt="logo"></a>
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
                <a  class="navbar-brand hidden-lg hidden-md" href="#"><img src="images/logo.png" alt="logo"></a>
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
                    <li><a href="#" class="image_button"><img src="images/user.png" alt="user"></a></li>
                    <li class="liked" title="19"><a href="#" class="image_button" ><img src="images/like.png" alt="like"></a></li>
                    <li class="liked" title="9"><a href="#" class="image_button"><img src="images/restaurant (1).png" alt="restaurant"></a></li>
                    <li><a class="cart_order_info" href="#">
                            <span class="cart_order_name">Ваш заказ</span><br>
                            <span class="cart_price_text">350грн.</span>
                        </a></li>

                </ul>



                <div  class="navbar-form navbar-left">
                    <button type="button" class="btn btn-success our_menu">Наше меню</button>
                </div>
                <div  class="navbar-form navbar-right hidden-sm">
                    <button type="button" class="btn btn-default complex_dinner_menu">Комплексные обеды</button>
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

        <div class="col-sm-12 main">
            <!--category menu-->
            <ul class="nav nav-pills nav-justified">
                <li ><a href="/">салаты</a></li>
                <li><a href="/">первые блюда</a></li>
                <li><a href="/index2.php">вторые блюда</a></li>
                <li><a href="#">гарниры</a></li>
                <li><a href="#">выпечка</a></li>
                <li><a href="#">напитки и десерты</a></li>
            </ul>

            <!--week menu-->
            <div class="wrap_week_menu">
                <ul class="week_menu week_menu1">
                    <li class="disabled"><a href="#"><div class="week_name">Понедельник</div><span class="week_time">29 января</span></a></li>
                    <li class="active"><a href="#"><div class="week_name">Вторник</div><span class="week_time">29 января</span></a></li>
                    <li><a href="#"><div class="week_name">Среда</div><span class="week_time">29 января</span></a></li>
                    <li><a href="#"><div class="week_name">Четверг</div><span class="week_time">29 января</span></a></li>
                    <li><a href="#"><div class="week_name">Пятница</div><span class="week_time">29 января</span></a></li>
                    <li><a href="#"><div class="week_name">Суббота</div><span class="week_time">29 января</span></a></li>
                    <li><a href="#"><div class="week_name">Воскресенье</div><span class="week_time">29 января</span></a></li>


                </ul>
                <ul class="week_menu week_menu2 red">
                    <li class="pdf_week"><a href="#"><div class="week_name">Меню в pdf</div><span class="week_time">на текущую / на следующую неделю</span></a></li>
                    <li class="next_week"><a href="#"><div class="week_name">&#8594;</div><span class="week_time">следующая неделя</span></a></li>

                </ul>
            </div>


            <div class="clearfix"></div>


            <div class="food_block">



                <div class="food_area">

                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2>Комплексные обеды</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt="Комплексные обеды">
                        </div>
                    </div>

                    <div class="food_block">

                        <?php
                        foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img src="images/food1.png" alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>

                    </div>
                    <div class="clearfix"></div>


                </div>


                <!--order complex-->
                <div class="food_area">

                    <div class="clearfix"></div>

                    <div class="food_block food_block_order ">

                        <div class="order_area">
                            <div class="food food_clear yellow">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>
                                    <hr>

                                    <div class="input-group wrap_count_complex_order">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>
                                    <hr>

                                    <div class="price">
                                        130 грн
                                    </div>
                                    <div class=" order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                    <ul class="order_complex_list">
                                        <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                        <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                        <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                        <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>
                                        <li><span class="prod_name">Борщ</span>  -  <span class="prod_price">25 грн </span>/<span class="prod_count">1</span>шт  </li>

                                    </ul>



                                </div>
                            </div>
                        </div>

                        <div class="wrap_food">
                            <?php
                            foreach (range(1,8) as $item) { ?>
                                <div class="food yellow">
                                    <img src="images/food1.png" alt="food">
                                    <div class="caption">
                                        <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                        <div class="input-group">
                                            <span class="count_food_text">количество: </span>
                                            <span class="input-group-addon  input-group-addon_f"></span>
                                            <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-addon input-group-addon_l"></span>
                                        </div>


                                        <div class="short_desc text-center">
                                            <p>
                                                Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                            </p>

                                        </div>

                                        <div class="price text-center">
                                            130 грн
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>


                </div>






                <div class="clearfix"></div>

                <!--                Салаты-->
                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2>Салаты</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt="Комплексные обеды">
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img src="http://lorempixel.com/278/247/" alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>



                <!-- Первые блюда-->
                <div class="clearfix"></div>


                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2> Первые блюда</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt=" Первые блюда">
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img class="lazy" data-src="http://lorempixel.com/278/247/"  alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>



                <!--                Вторые блюда-->

                <div class="clearfix"></div>


                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2> Вторые блюда</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt=" Вторые блюда">
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img class="lazy" data-src="http://lorempixel.com/278/247/"  alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>



                <!--                Гарниры-->
                <div class="clearfix"></div>


                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2> Гарниры</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt=" Гарниры">
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img class="lazy" data-src="http://lorempixel.com/278/247/"  alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>


                <!--                Выпечка-->
                <div class="clearfix"></div>


                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2> Выпечка</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt=" Выпечка">
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img class="lazy" data-src="http://lorempixel.com/278/247/"  alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>


                <!--                Напитки и Десерты-->
                <div class="clearfix"></div>


                <div class="slider_food_block food_area">
                    <div class="food_block_header text-center">
                        <div class="nice">Babooshka</div>
                        <h2> Напитки и Десерты</h2>
                        <div class="bottom_food_block_header">
                            <img src="images/food.png" alt=" Выпечка">
                        </div>
                    </div>

                    <div class="owl-carousel owl-theme food_block">
                        <?php  foreach (range(1,10) as $item) { ?>
                            <div class="food yellow">
                                <img class="lazy" data-src="http://lorempixel.com/278/247/"  alt="food">
                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>


                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-center">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-center">
                                        130 грн
                                    </div>
                                    <div class="order text-center">
                                        <button type="button" class="btn btn-success">Заказать</button>
                                    </div>

                                </div>
                            </div>
                        <?php }  ?>
                    </div>

                </div>



            </div>







        </div>
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
                <img src="images/logofot.png" alt="logo foot">
                <p class="footer_cocyrigth">© 2002 - 2018. Все права защищены.</p>
                <div class="social_footer">
                    <a href="#">  <img src="images/google-maps.png" alt="googlemaps"></a>
                    <a href="#">    <img src="images/instagram.png" alt="instagram"></a>
                    <a href="#">  <img src="images/facebook.png" alt="facebook"></a>
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
        <!--            <img class="pull-right car_footer_img" src="images/footcar.png" alt="car footer">-->
        <!--            <hr class="footer-hr">-->

    </div>
    <!--/.Footer Links-->


    <!--Copyright-->

    <!--/.Copyright-->

</footer>
<!--/.Footer-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="bootstrap-3.3.7/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="bootstrap-3.3.7/assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap-3.3.7/assets/js/ie10-viewport-bug-workaround.js"></script>



<script src="js/OwlCarousel2-2.2.1/OwlCarousel2-2.2.1/dist/owl.carousel.js"></script>
<script type="text/javascript" src="js/lazy/jquery.lazy.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        // items:5,
        nav: true,
        dots:false,
        navText: ["<img class='simple_load' src='images/prev.png'>","<img class='simple_load' src='images/next.png'>"],
        merge:true,
        loop:true,
        autoWidth:false,

        // navigation : true,
        // margin:10,
        // video:true,
        lazyLoad:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1024:{
                items:3,
                nav:true,
                loop:false
            },
            1200:{
                items:5,
                nav:true,
                loop:false
            }
        }
        // center:true,
        // responsive:{
        //     480:{
        //         items:2
        //     },
        //     600:{
        //         items:4
        //     }
        // }
    });

    $(function() {

        $('.lazy').lazy({

            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0
        });

        $('.simple_load').click(function() {
            $('img.lazy').lazy({
                bind: "event",
                effect: "fadeIn",
                effectTime: 1000,
                threshold: 0
            });
        });

    });
</script>

</body>
</html>
