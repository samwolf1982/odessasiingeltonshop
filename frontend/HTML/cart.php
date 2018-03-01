<?php   include_once 'layout/header.php'; ?>

<link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap-cart.min.css">
<link href="temp/temp.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Комплексные обеды</a></li>
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
                    <div class="pull-right">
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
                <hr class="clear_hr">
                <div class="clearfix"></div>
                <div class="food_area">
                    <div class="food_block">

                        <?php
                        foreach (range(1,5) as $item) { ?>
                            <div class="food yellow">
                                <div class="wrp_img_order">
                                    <img class="text-center"  src="images/food1.png" alt="food">
                                </div>

                                <div class="caption">
                                    <h4><a href="#">Комплексный обед  Лайт 1 (081) </a></h4>
                                    <div class="input-group">
                                        <span class="count_food_text">количество: </span>
                                        <span class="input-group-addon  input-group-addon_f"></span>
                                        <input type="text" class="form-control text-center" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon input-group-addon_l"></span>
                                    </div>


                                    <div class="short_desc text-left">
                                        <p>
                                            Борщ овощной с грибами, салат "Витаминный”, дополнительный набо
                                        </p>

                                    </div>

                                    <div class="price text-left">
                                        130 грн
                                    </div>


                                </div>
                                <div class="delete">
                                    <a href="#" class="delete_btn btn"></a>
                                </div>
                            </div>
                        <?php }  ?>

                    </div>
                    <div class="clearfix"></div>

                    <div class="footer_foodarea">
<div class="row ">
    <div class="col-sm-6 pull-left">
        <div class="wrp_time_text">
            <span>Время доставки:</span>
        </div>

    </div>
    <div class="col-sm-6 text-right">
    <div class="wrap_time_select">
        <div class="form-group ">
            <div class='input-group date' id='datetimepicker3'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
            </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>


    <div class="col-sm-12 price_area">
        <div class="col-sm-6 pull-left">
            <div class="wrp_time_text">
                <span>Сумма заказа:</span>
            </div>

        </div>
        <div class="col-sm-6 text-right">
            <div class="wrap_time_select">
                520 грн
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
                520 грн
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-6 pull-left">
            <div class="wrp_time_text">
                <span> К оплате за 27.01.2017:</span>
            </div>

        </div>
        <div class="col-sm-6 text-right">
            <div class="wrap_time_select">
                520 грн
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
                1 520 грн
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
    <div class="col-sm-12 return_area text-center">
          <p><a href="#">Вернуться на главную</a></p>
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
                            <p class="info-min-price">
                                Минимальная сумма заказа - 300 грн
                            </p>
                            <p style="text-indent: 5px;">
                                Время приготовления и доставка зависит от времени суток и заказаных блюд и составляет не менее двух часов.
                            </p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

<div class="form_area">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="name">Имя:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="phone">Телефон:</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Номер телефона">
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label class="control-label " for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
        </div>
    </div>
   <div class="clearfix"></div>
    <hr>

<div class="col-sm-12">
    <div class="add_day">
        <div class="pull-left">
            Способ доставки
        </div>
    </div>
</div>
    <div class="clearfix"></div>
<!--    radio-->
    <div class="col-sm-6 flexradio">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Самовывоз <span class="yelowtext"> (Скидка 10%) </span></label>
        </div>
    </div>
    <div class="col-sm-6 flexradio">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Доставка курьером</label>
        </div>
    </div>
    <div class="clearfix"></div>

<!--    address-->
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="street">Улица:</label>
            <input type="text" class="form-control" id="street" name="street" placeholder="Улица">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="district">Район:</label>
            <input type="text" class="form-control" id="district" name="district" placeholder="Район">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="number_home">Дом:</label>
            <input type="text" class="form-control" id="number_home" name="number_home" placeholder="Дом">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label " for="number_flat">Квартира:</label>
            <input type="text" class="form-control" id="number_flat" name="number_flat" placeholder="Квартира">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <input class="form-check-input" type="checkbox" id="private_house" value="option1">
            <label class="form-check-label" for="private_house">Я живу в частном доме</label>
        </div>
    </div>
<div class="clearfix"></div>


<!--    curier info-->
<div class="col-sm-12">
    <h4 class="curier_text">Информация для курьера (необязательно)</h4>
</div>
    <div class="clearfix"></div>
    <div class="pt2"></div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label " for="number_dress">Номер парадной:</label>
            <input type="text" class="form-control" id="number_dress" name="number_dress" placeholder="Номер парадной">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label " for="number_domofon">Код домофона:</label>
            <input type="text" class="form-control" id="number_domofon" name="number_domofon" placeholder="Код домофона:">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label " for="number_floar">Этаж: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
            <input type="text" class="form-control" id="number_floar" name="number_floar" placeholder="Этаж">
        </div>
    </div>


    <!--    pay method-->
    <div class="col-sm-12">
        <h4 class="curier_text">Способ оплаты</h4>
    </div>
    <div class="clearfix"></div>
    <div class="pt2"></div>
    <div class="col-sm-6 flexradio">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="paymentmethods" id="paymentmethods1" value="option1">
            <label class="form-check-label" for="paymentmethods1">       Оплата наличными при получении</label>
        </div>
    </div>
    <div class="col-sm-6 flexradio">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="paymentmethods" id="paymentmethods1" value="option1">
            <label class="form-check-label" for="paymentmethods1">Оплата с банковской карты</label>
        </div>
    </div>
    <div class="col-sm-6 flexradio">
        <div class="form-group">
            <input class="form-check-input" type="radio" name="paymentmethods" id="paymentmethods1" value="option1">
            <label class="form-check-label" for="paymentmethods1">Оплата в день заказа, при доставке</label>
        </div>
    </div>

<div class="clearfix"></div>

<!--remember me-->
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label " for="timefinish">Сдача с:</label>
            <input type="text" class="form-control" id="timefinish" name="timefinish" placeholder="">
        </div>
    </div>
    <div class="col-sm-8 flexradio rememberme">

            <div class="form-group">
                <input class="form-check-input" type="checkbox" id="rememberme" value="option1">
                <label class="form-check-label" for="rememberme">Запомнить меня как постоянного пользователя</label>
            </div>

    </div>


    <div class="clearfix"></div>
    <div class="pt2"></div>
    <div class="col-sm-12">
        <div class="submitarea">
            <button type="submit" class="btn btn-success submit">Оформить заказ</button>
        </div>
    </div>

</div>
                    <div class="clearfix"></div>





                </div>






            </div>
<!--       end main-->
        </div>
    </div>
</div>





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
<script type="text/javascript" src="js/moment/moment.js"></script>


<!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="js/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.css" />
<script src="js/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js"></script>



<script>
    $('.owl-carousel').owlCarousel({
        // items:5,
        nav: true,
        dots:false,
        navText: ["<img class='simple_load' src='images/chevron-sign-to-right copy.png'>","<img class='simple_load' src='images/chevron-sign-to-right.png'>"],
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
                items:3,
                nav:true,
                loop:false
            },
            1366:{
                items:3,
                nav:true,
                loop:false
            },

            1440:{
                items:3,
                nav:true,
                loop:false
            },
            1441:{
                items:4,
                nav:true,
                loop:false
            },
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
    $(function () {
        $('#datetimepicker3').datetimepicker({
            format: 'H:mm',
        });
    });
    $(function() {
    });
</script>



<?php   include_once 'layout/footer.php'; ?>
