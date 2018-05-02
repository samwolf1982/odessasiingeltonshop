<?php
/* @var $this yii\web\View */

use app\components\MainpagebannerWidget;
use frontend\assets\MainpageverAsset;
use yii\widgets\Breadcrumbs;

MainpageverAsset::register($this);

?>


<div class="col-sm-12 main">

    <section class="main-banner">
        <p class="main-banner-pretitle">Заказ еды, обеды в офис, комплексные обеды</p>
        <h1 class="main-banner-title">Доставка готовой еды в одессе</h1>
        <p class="main-banner-subtitle">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            <br>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
        </p>

        <div class="btn-group">
            <button type="button" class="button orange">
                подробнее <span>........</span>
            </button>
            <button type="button" class="button transp">
                посмотреть меню
            </button>
        </div>
    </section>




    <?=MainpagebannerWidget::widget([]);  ?>


    <section class="main-recommend">
        <div class="food_area ">
            <div class="food_block_header text-center">
                <div class="nice">Babooshka</div>
                <h2 class="strong">BABOOSHKA РЕКОМЕНДУЕТ</h2>
                <div class="bottom_food_block_header">
                    <img src="/images/food.png" alt="Комплексные обеды">
                </div>
            </div>

            <div class="food_block">
                <?php for ($i=0; $i < 5; $i++) { ?>
                    <div class="food text-center">
                        <a href="/category/view?categoryId=22"><img src="/gallery/images/image-by-item-and-alias?item=Category22&amp;dirtyAlias=79b1fc9599-2_200x200.jpg" alt="Суп"></a>
                        <div class="food_block-info">
                            <p><a class="" href="/category/view?categoryId=22">Супчик вкусный ммм..</a></p>
                            <p class="dish-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            </p>
                        </div>
                    </div>
                <?}?>
            </div>
        </div>
    </section>

    <section class="main-how_it_works">
        <div class="food_block_header text-center">
            <div class="nice">Babooshka</div>
            <h2 class="strong">КАК ЭТО РАБОТАЕТ</h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>

        <div class="row">
            <div class="main-how_it_works-item col-md-3">
				<span class="img-circle">
					<img src="/images/menu.png">
				</span>
                <p class="strong">ВЫБЕРИТЕ БЛЮДА <br> ИЗ МЕНЮ</p>
                <p>Оформите Ваш заказ на сайте <br> или по телефону</p>
            </div>

            <div class="main-how_it_works-item col-md-3">
				<span class="img-circle">
					<img src="/images/pot.png">
				</span>
                <p class="strong">МЫ <br> ПРИГОТОВИМ</p>
                <p>Наши повара готовят для Вас <br> с юбовью и только из свежих продуктов</p>
            </div>

            <div class="main-how_it_works-item col-md-3">
				<span class="img-circle">
					<img src="/images/delivery-car.png">
				</span>
                <p class="strong">КУРЬЕР <br> ДОСТАВИТ</p>
                <p>Вы получите свой заказ в <br> удобное для Вас время и в <br> любую погоду</p>
            </div>

            <div class="main-how_it_works-item col-md-3">
				<span class="img-circle">
					<img src="/images/family-silhouette.png">
				</span>
                <p class="strong">НАСЛАЖДАЙТЕСЬ <br> ДОМАШНЕЙ ЕДОЙ</p>
                <p>Проводите больше времени с <br> Вашими близкими, а не у плиты</p>
            </div>
        </div>
    </section>

    <section class="main-special-offers">
        <div class="food_block_header text-center">
            <div class="nice">Babooshka</div>
            <h2 class="strong">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>

        <div class="row">
            <article class="main-special-offers-wrapper">
                <div class="offers-col">
                    <img src="/images/family.png">
                </div>
                <div class="offers-col">
                    <div>
                        <h2 class="strong">ДОМАШНИЙ БАНКЕТ</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                    </div>
                </div>
            </article>

            <article class="main-special-offers-wrapper">
                <div class="offers-col">
                    <div>
                        <h2 class="strong">ДОМАШНИЙ БАНКЕТ</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                    </div>
                </div>
                <div class="offers-col">
                    <img src="/images/family.png">
                </div>
            </article>

            <article class="main-special-offers-wrapper">

                <div class="offers-col">
                    <img src="/images/family.png">
                </div>
                <div class="offers-col">
                    <div>
                        <h2 class="strong">ДОМАШНИЙ БАНКЕТ</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                            sit voluptatem accusantium doloremque laudan
                        </p>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <section class="main-how_it_works why-convinent">
        <div class="food_block_header">
            <div class="nice">Babooshka</div>
            <h2 class="strong">ПОЧЕМУ ЭТО УДОБНО И ВЫГОДНО</h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>

        <div class="flex">
            <div class="main-how_it_works-item">
				<span class="bg-num">
					01
				</span>
                <p class="strong">ЭКОНОМИЯ <br> БЮДЖЕТА</p>
                <p>Мы покупаем продукты по <br>
                    оптовым ценам и готовим по <br>
                    правильной технологии на <br>
                    автоматизированном <br>
                    производстве. </p>
            </div>

            <div class="main-how_it_works-item">
				<span class="bg-num">
					02
				</span>
                <p class="strong">ВСЕГДА <br> СВЕЖИЕ ПРОДУКТЫ</p>
                <p>Мы каждое утро покупаем <br>
                    свежие продукты у проверенных <br>
                    поставщиков. </p>
            </div>

            <div class="main-how_it_works-item">
				<span class="bg-num">
					03
				</span>
                <p class="strong">РАЗНООБРАЗНОЕ<br> МЕНЮ</p>
                <p>В нашем меню есть предложения <br>
                    для разных категорий клиента. <br>
                    Для детей, пенсионеров, офисов, <br>
                    строителей, актеров и т.д.</p>
            </div>

            <div class="main-how_it_works-item">
				<span class="bg-num">
					04
				</span>
                <p class="strong">ЭКОНОМИЯ <br> ВРЕМЕНИ</p>
                <p>Вам больше не нужно ходить в <br>
                    магазин, покупать продукты и <br>
                    долго готовить вкусный ужин. <br>
                    Проводите больше время со <br>
                    своими близкими.</p>
            </div>
        </div>
    </section>

    <section class="main-action">
        <div class="food_block_header text-center">
            <div class="nice">Babooshka</div>
            <h2 class="strong">АКЦИИ</h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>

        <div class="flex">
            <div class="main-action-item" style="background-image: url('/images/action.png');">
                <a href="#">
                    <div>
                        <div>
                             <span class="main-action-term">
                            до 29.12.2018
                        </span>
                            <p>Флаер -15%</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="main-action-item" style="background-image: url('/images/action.png');">
                <a href="#">
                    <div>
                        <div>
                            <span class="main-action-term">
                            до 29.12.2018
                        </span>
                            <p>Компот в подарок</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="main-action-item" style="background-image: url('/images/action.png');">
                <a href="#">
                    <div>
                        <div>
                             <span class="main-action-term">
                            до 29.12.2018
                        </span>
                            <p>Первый комплексный обед -30%</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="main-review">
        <div class="food_block_header text-center">
            <div class="nice">Babooshka</div>
            <h2 class="strong">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
            <div class="bottom_food_block_header">
                <img src="/images/food.png" alt="Комплексные обеды">
            </div>
        </div>

        <div class="owl-review-wrapper">
        <div class="owl-review">
            <?php for ($i=0; $i < 2; $i++) { ?>
                <div class="review-item">
                    <div class="review-item-img">
                        <img src="/images/reviewer.png">
                    </div>
                    <div class="review-item-text">
                        <h4 class="strong">Иванова Анна</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat
                        </p>
                    </div>
                </div>
            <? } ?>
        </div>
            <div class="owl-arrows">
                <div class="arr arr-left">
                    <span></span>
                </div>

                <div class="arr arr-right">
                    <span></span>
                </div>
            </div>
        </div>
    </section>


    <section class="main-latest-news">
        <div class="flex main-latest-news-wrapper">
            <div class="flex-wrapper flex-wrapper1 flex">
                <?php for ($i=0; $i < 2; $i++) { ?>
                    <div class="main-latest-news-item">
                        <div class="main-latest-news-item-img">
                            <img src="/images/latest-news.png">
                        </div>
                        <div class="main-latest-news-item-text">
                            <h4 class="strong">Пять полезных свойств ягод</h4>
                            <p class="date">23.02.2018 г.</p>
                        </div>
                    </div>
                <? } ?>
            </div>

            <div class="flex-wrapper">
                <div class="nice">Babooshka</div>
                <h2>ПОСЛЕДНИЕ НОВОСТИ</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                </p>
                <button class="news-block-btn">
                    <span>Отправить заявку на питание </span><span>.......</span>
                </button>
            </div>
        </div>
    </section>


    <section class="main-social">
        <div class="food_block_header text-left">
            <div class="nice">Babooshka</div>
            <h2 class="strong">BABOOSHKA В СОЦ СЕТЯХ</h2>
        </div>

        <div class="main-social-widgets-wrapper flex">
            <div class="main-social-widgets-wrapper-item">
                <div class="soc-widgets_fb">
                    <div class="widgets_fb_layout-blue">
                        <p class="fb-logo text-center">facebook</p>
                    </div>
                    <div class="soc-widgets_fb_area">
                        <div class="fb-page"
                             data-href="https://www.facebook.com/facebook"
                             data-adapt-container-width="true"
                             data-hide-cover="false"
                             data-show-facepile="true"
                        >
                        </div>
                    </div>
                    <div class="widgets_fb_layout-gray"></div>
                </div>
            </div>

            <div class="main-social-widgets-wrapper-item">

            </div>

            <div class="main-social-widgets-wrapper-item">
                <div class="widget-map" id="widget_map">

                </div>
            </div>
        </div>
    </section>
</div>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9iV-vIowospXLywrgcMv3zJkO987Vpdc&callback=initMapp">