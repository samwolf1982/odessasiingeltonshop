<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 02.05.2018
 * Time: 7:24
 */





?>



<?php if (!empty($slider)){  ?>
<section class="main-banner">
    <p class="main-banner-pretitle"><?=$slider->name?></p>
    <h1 class="main-banner-title">
        <?= $slider->getField('dop-pole-dla-bannera-na-glavnoj'); ?>
    </h1>

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

<?php }else{ ?>
    <section class="main-banner">
        <p class="main-banner-pretitle">Конфигурация 'slider_main_page_id'  не правильная. Проверьте файл конфигурации. </p>
    </section>

<?php }  ?>
