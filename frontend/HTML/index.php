<?php   include_once 'layout/header.php'; ?>


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
                items:5,
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






<?php   include_once 'layout/footer.php'; ?>
