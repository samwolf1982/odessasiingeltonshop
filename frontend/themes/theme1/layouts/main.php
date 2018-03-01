<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?= Yii::$app->language ?>" xml:lang="<?= Yii::$app->language ?>" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="My Store" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/stylesheet/ie.css" media="screen" />
    <![endif]-->

</head>





<body class="s_layout_fixed">
<?php $this->beginBody() ?>

<div id="wrapper" class="container">

        <?= Alert::widget() ?>
        <?= $content ?>






    <!-- ********************** -->
    <!--      H E A D E R       -->
    <!-- ********************** -->
    <div id="header" class="container_12">
        <div class="grid_12">

            <a id="site_logo" href="index.html">Shoppica store - Premium e-Commerce Theme</a>

            <div id="system_navigation" class="s_nav">
                <ul class="s_list_1 clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="static.html">About Us</a></li>
                    <li><a href="contacts.html">Contact</a></li>
                </ul>
            </div>

            <div id="site_search">
                <a id="show_search" href="javascript:;" title="Search:"></a>
                <div id="search_bar" class="clearfix">
                    <input type="text" id="filter_keyword" />
                    <select id="filter_category_id">
                        <option value="0">All Categories</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                    </select>
                    <a class="s_button_1 s_secondary_color_bgr"><span class="s_text">Go</span></a> <a class="s_advanced s_main_color" href="">Advanced Search</a>
                </div>
            </div>

            <div id="language_switcher" class="s_switcher"> <span class="s_selected">US Dollar</span>
                <ul class="s_options">
                    <li><a href="">Euro</a></li>
                    <li><a href="">Pound Sterling</a></li>
                    <li><a href="">US Dollar</a></li>
                </ul>
            </div>

            <div id="currency_switcher" class="s_switcher"> <span class="s_selected"><img src="images/flags/gb.png" alt="English" /> English</span>
                <ul class="s_options">
                    <li><a href=""><img src="images/flags/gb.png" alt="English" /> English</a></li>
                    <li><a href=""><img src="images/flags/de.png" alt="Deutsch" /> Deutsch</a></li>
                </ul>
            </div>

            <div id="categories" class="s_nav">
                <ul>
                    <li id="menu_home"> <a href="index.html">Home</a> </li>
                    <li> <a href="listing_1.html">Electronics</a>
                        <div class="s_submenu">
                            <h3>Inside Electronics</h3>
                            <ul class="s_list_1 clearfix">
                                <li> <a href="listing_1.html">Digital Cameras</a>
                                    <ul class="s_list_1 clearfix">
                                        <li><a href="listing_1.html">Compact Cameras</a></li>
                                        <li><a href="listing_1.html">Digital SLR</a></li>
                                    </ul>
                                </li>
                                <li><a href="listing_1.html">Home Audio</a></li>
                                <li><a href="listing_1.html">Home Cinema</a></li>
                                <li><a href="listing_1.html">Cell Phones</a></li>
                                <li><a href="listing_1.html">MP3 Players</a></li>
                                <li><a href="listing_1.html">Car-Audio</a></li>
                            </ul>
                            <span class="clear border_eee"></span>
                            <h3>Electronics Brands</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Canon</a></li>
                                <li><a href="listing_1.html">Hugo Boss</a></li>
                                <li><a href="listing_1.html">Panasonic</a></li>
                                <li><a href="listing_1.html">Samsung</a></li>
                                <li><a href="listing_1.html">Sony</a></li>
                            </ul>
                        </div>
                    </li>
                    <li> <a href="listing_1.html">Computers</a>
                        <div class="s_submenu">
                            <h3>Inside Computers</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Desktops</a></li>
                                <li><a href="listing_1.html">Laptops</a></li>
                                <li><a href="listing_1.html">Monitors</a></li>
                                <li><a href="listing_1.html">Components</a></li>
                                <li><a href="listing_1.html">Software</a></li>
                            </ul>
                            <span class="clear border_eee"></span>
                            <h3>Computers Brands</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Hugo Boss</a></li>
                                <li><a href="listing_1.html">Sony</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Clothing</a>
                        <div class="s_submenu">
                            <h3>Inside Clothing</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Women's Clothing</a></li>
                                <li><a href="listing_1.html">Men's Clothing</a></li>
                                <li><a href="listing_1.html">Boys</a></li>
                                <li><a href="listing_1.html">Girls</a></li>
                                <li><a href="listing_1.html">Infants and toddlers</a></li>
                            </ul>
                            <span class="clear border_eee"></span>
                            <h3>Clothing Brands</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Bvlgari</a></li>
                                <li><a href="listing_1.html">Elisabeth Arden</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Shoes</a>
                        <div class="s_submenu">
                            <h3>Inside Shoes</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Women's Shoes</a></li>
                                <li><a href="listing_1.html">Men's Shoes</a></li>
                                <li><a href="listing_1.html">Kids' Shoes</a></li>
                                <li><a href="listing_1.html">Sportswear</a></li>
                            </ul>
                            <span class="clear border_eee"></span>
                            <h3>Shoes Brands</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Adidas</a></li>
                                <li><a href="listing_1.html">Apple</a></li>
                                <li><a href="listing_1.html">Armani</a></li>
                                <li><a href="listing_1.html">Balenciaga</a></li>
                                <li><a href="listing_1.html">Christian Dior</a></li>
                                <li><a href="listing_1.html">Nike</a></li>
                                <li><a href="listing_1.html">Samsung</a></li>
                                <li><a href="listing_1.html">Sony</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Gifts</a>
                        <div class="s_submenu">
                            <h3>Inside Gifts</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Perfumes</a></li>
                                <li><a href="listing_1.html">Spirits and Beers</a></li>
                                <li><a href="listing_1.html">Wines</a></li>
                                <li><a href="listing_1.html">Flowers</a></li>
                                <li><a href="listing_1.html">Chocolates and sweets</a></li>
                                <li><a href="listing_1.html">Toys and Games</a></li>
                                <li><a href="listing_1.html">Pets</a></li>
                            </ul>
                            <span class="clear border_eee"></span>
                            <h3>Gifts Brands</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Adidas</a></li>
                                <li><a href="listing_1.html">Armani</a></li>
                                <li><a href="listing_1.html">Balenciaga</a></li>
                                <li><a href="listing_1.html">Bvlgari</a></li>
                                <li><a href="listing_1.html">Canon</a></li>
                                <li><a href="listing_1.html">Christian Dior</a></li>
                                <li><a href="listing_1.html">Elisabeth Arden</a></li>
                                <li><a href="listing_1.html">Hugo Boss</a></li>
                                <li><a href="listing_1.html">Sony</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">At home</a>
                        <div class="s_submenu">
                            <h3>Inside At home</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Furniture</a></li>
                                <li><a href="listing_1.html">Garden</a></li>
                                <li><a href="listing_1.html">Appliances</a></li>
                                <li><a href="listing_1.html">Pet Supplies</a></li>
                                <li><a href="listing_1.html">Tools and Accessories</a></li>
                                <li><a href="listing_1.html">Lighting</a></li>
                                <li><a href="listing_1.html">Food and Drink</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Health</a>
                        <div class="s_submenu">
                            <h3>Inside Health</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Suplements</a></li>
                                <li><a href="listing_1.html">Cosmetics</a></li>
                                <li><a href="listing_1.html">Personal Care</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Jewellery</a>
                        <div class="s_submenu">
                            <h3>Inside Jewellery</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Necklaces</a></li>
                                <li><a href="listing_1.html">Rings</a></li>
                                <li><a href="listing_1.html">Bracelets</a></li>
                                <li><a href="listing_1.html">Earrings</a></li>
                                <li><a href="listing_1.html">Pendants</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="listing_1.html">Books</a>
                        <div class="s_submenu">
                            <h3>Inside Books</h3>
                            <ul class="s_list_1 clearfix">
                                <li><a href="listing_1.html">Fantasy</a></li>
                                <li><a href="listing_1.html">Love Stories</a></li>
                                <li><a href="listing_1.html">Science Fiction</a></li>
                                <li><a href="listing_1.html">Educational</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="cart_menu" class="s_nav">
                <a href="cart.html"><span class="s_icon"></span> <small class="s_text">Cart</small><span class="s_grand_total s_main_color">$0.00</span></a>
                <div class="s_submenu s_cart_holder">
                    <p class="s_mb_0">0 items</p>
                </div>
            </div>

        </div>
    </div>
    <!-- end of header -->


    <!-- ********************** -->
    <!--     I N T R O          -->
    <!-- ********************** -->
    <div id="intro">
        <div id="intro_wrap">
            <div id="product_intro" class="container_12">
                <div id="product_intro_info" class="grid_5">
                    <div style="position: relative;">
                        <h2><a href="product.html">Samsung SyncMaster 941BW</a></h2>
                        <div class="s_rating_holder">
                            <p class="s_rating s_rating_big s_rating_5"> <span style="width: 60%;" class="s_percent"></span> </p>
                            <span class="s_average">3 out of 5</span> </div>
                        <p class="s_desc"> Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger images, more room to work and crisp motion. In addition, the exclusive MagicBright 2, MagicColor and MagicTune technologies help deliver th...</p>
                        <div class="s_price_holder">
                            <p class="s_price"> <span class="s_currency s_before">$</span>384.67 </p>
                        </div>
                    </div>
                    <div style="position: relative; display: none;">
                        <h2><a href="product.html">White football trainers</a></h2>
                        <p class="s_desc"> Product 8 ...</p>
                        <div class="s_price_holder">
                            <p class="s_price"> <span class="s_currency s_before">$</span>192.34 </p>
                        </div>
                    </div>
                    <div style="position: relative; display: none;">
                        <h2><a href="product.html">Balenciaga Paris</a></h2>
                        <p class="s_desc"> Intel Core 2 Duo processor Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever 1GB memory, larger hard drives The new MacBook now comes with 1GB of memory standard and larger hard drives for the entire line perfect for runni...</p>
                        <div class="s_price_holder">
                            <p class="s_price"> <span class="s_currency s_before">$</span>961.68 </p>
                        </div>
                    </div>
                    <div style="position: relative; display: none;">
                        <h2><a href="product.html">Adidas Acqua</a></h2>
                        <p class="s_desc"> Product 8 Morbi malesuada, ante sit amet faucibus pharetra, ipsum ante imperdiet tellus, nec placerat metus sem sed magna. Quisque id urna a metus porttitor tristique et at justo. Praesent non enim in elit sagittis feugiat. Integer in lectus lobortis lacus commodo mattis non auctor metus. Sus...</p>
                        <div class="s_price_holder">
                            <p class="s_price"> <span class="s_currency s_before">$</span>192.34 </p>
                        </div>
                    </div>
                    <div style="position: relative; display: none;">
                        <h2><a href="product.html">Panasonic Lumix</a></h2>
                        <p class="s_desc"> Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agilit...</p>
                        <div class="s_price_holder">
                            <p class="s_price"> <span class="s_currency s_before">$</span>153.87 </p>
                        </div>
                    </div>
                </div>
                <div id="product_intro_preview">
                    <div class="slides_container">
                        <div class="slideItem" style="display: none"><a href="product.html"><img src="images/dummy/pic_1.jpg" alt="" /></a></div>
                        <div class="slideItem" style="display: none"><a href="product.html"><img src="images/dummy/pic_2.jpg" alt=""  /></a></div>
                        <div class="slideItem" style="display: none"><a href="product.html"><img src="images/dummy/pic_3.jpg" alt="" /></a></div>
                        <div class="slideItem" style="display: none"><a href="product.html"><img src="images/dummy/pic_4.jpg" alt="" /></a></div>
                        <div class="slideItem" style="display: none"><a href="product.html"><img src="images/dummy/pic_5.jpg" alt="" /></a></div>
                    </div>
                    <a class="s_button_prev" href="javascript:;"></a>
                    <a class="s_button_next" href="javascript:;"></a>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery/jquery.slides.js"></script>
    <script type="text/javascript" src="js/shoppica.products_slide.js"></script>
    <!-- end of intro -->


    <!-- ********************** -->
    <!--      C O N T E N T     -->
    <!-- ********************** -->
    <div id="content" class="container_12">

        <div id="welcome" class="grid_12">
            <h2>Welcome to Shoppica store</h2>
            <p> <a href="">Shoppica</a> is a stylish premium OpenCart theme (currently supported versions are 1.4.9.3/1.4.9.4). The clean and modern design allows you to use the theme for every kind of online shop: clothes, accessories, gifts, electronics, furniture, health and cosmetics store and so on.</p>
            <p> One of the main features is to choose different types of slideshows for every category, so you can personalise every part of your store. Shoppica allows you to customize product listing size, column position and layout type, giving you the power to easy adapt the theme to your produc or service. With the color themer tool you can change site&#39;s elements and make your store unique and stand out of the crowd.</p>
        </div>

        <div class="clear"></div>

        <div id="special_home" class="grid_12">
            <h2 class="s_title_1"><span class="s_main_color">Specials</span> Products</h2>
            <div class="clear"></div>
            <div class="s_listing s_grid_view clearfix">
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_5.jpg" title="Armani Acqua di Gioia" alt="Armani Acqua di Gioia" /></a>
                    <h3><a href="product.html">Armani Acqua di Gioia</a></h3>
                    <p class="s_model">Product 4</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,538.69</span><span class="s_currency s_before">$</span>1,346.35</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_6.jpg" title="Hennesy Paradis Extra" alt="Hennesy Paradis Extra" /></a>
                    <h3><a href="product.html">Hennesy Paradis Extra</a></h3>
                    <p class="s_model">Product 19</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,923.36</span><span class="s_currency s_before">$</span>1,731.02</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_7.jpg" title="Leica M7" alt="Leica M7" /></a>
                    <h3><a href="product.html">Leica M7</a></h3>
                    <p class="s_model">Product 4</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,538.69</span><span class="s_currency s_before">$</span>1,346.35</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_8.jpg" title="Sony VAIO" alt="Sony VAIO" /></a>
                    <h3><a href="product.html">Sony VAIO</a></h3>
                    <p class="s_model">Product 19</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>899.99</span><span class="s_currency s_before">$</span>1,731.02</p>
                    <p class="s_rating s_rating_5"><span style="width: 100%;" class="s_percent"></span></p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_9.jpg" title="Sony Cyber Shot S1000" alt="Sony Cyber Shot S1000" /></a>
                    <h3><a href="product.html">Sony Cyber Shot S1000</a></h3>
                    <p class="s_model">Product 8</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>99,999.99</span><span class="s_currency s_before">$</span>9,999.99</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_10.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
                    <h3><a href="product.html">Panasonic Lumix</a></h3>
                    <p class="s_model">Product 4</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,923.36</span><span class="s_currency s_before">$</span>500.00</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div id="banners_1">
            <div class="grid_3">
                <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
                    <img src="images/dummy/banner_4.jpg">
                </a>
            </div>
            <div class="grid_3">
                <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
                    <img src="images/dummy/banner_1.jpg">
                </a>
            </div>
            <div class="grid_3">
                <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
                    <img src="images/dummy/banner_2.jpg">
                </a>
            </div>
            <div class="grid_3">
                <a href="http://themeforest.net/item/shoppica-premium-open-cart-theme/235470?ref=ThemeBurn" target="_blank">
                    <img src="images/dummy/banner_3.jpg">
                </a>
            </div>
            <div class="clear"></div>
        </div>

        <div id="latest_home" class="grid_12">
            <h2 class="s_title_1"><span class="s_main_color">Latest</span> Products</h2>
            <div class="clear"></div>
            <div class="s_listing s_grid_view clearfix">
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_9.jpg" title="Sony Cyber Shot S1000" alt="Sony Cyber Shot S1000" /></a>
                    <h3><a href="product.html">Sony Cyber Shot S1000</a></h3>
                    <p class="s_model">Product 8</p>
                    <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_10.jpg" title="Panasonic Lumix" alt="Panasonic Lumix" /></a>
                    <h3><a href="product.html">Panasonic Lumix</a></h3>
                    <p class="s_model">Product 4</p>
                    <p class="s_price"><span class="s_currency s_before">$</span>153.87</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_1.jpg" title="Samsung P200" alt="Samsung P200" /></a>
                    <h3><a href="product.html">Samsung P200</a></h3>
                    <p class="s_model">Product 6</p>
                    <p class="s_price"><span class="s_currency s_before">$</span>384.67</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_2.jpg" title="Casio Exilim Zoom" alt="Casio Exilim Zoom" /></a>
                    <h3><a href="product.html">Casio Exilim Zoom</a></h3>
                    <p class="s_model">Product 7</p>
                    <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_3.jpg" title="Canon Digital Ixus 200 IS" alt="Canon Digital Ixus 200 IS" /></a>
                    <h3><a href="product.html">Canon Digital Ixus 200 IS</a></h3>
                    <p class="s_model">Product 7</p>
                    <p class="s_price"><span class="s_currency s_before">$</span>192.34</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="s_item grid_2"> <a class="s_thumb" href="product.html"><img src="images/dummy/pic_4.jpg" title="Hennesy Paradis Extra" alt="Hennesy Paradis Extra" /></a>
                    <h3><a href="product.html">Hennesy Paradis Extra</a></h3>
                    <p class="s_model">Product 19</p>
                    <p class="s_price s_promo_price"><span class="s_old_price"><span class="s_currency s_before">$</span>1,923.36</span><span class="s_currency s_before">$</span>1,731.02</p>
                    <a class="s_button_add_to_cart" href="product.html"><span class="s_icon_16"><span class="s_icon"></span>Add to Cart</span></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

    </div>
    <!-- end of content -->

    <!-- ********************** -->
    <!--   S H O P   I N F O    -->
    <!-- ********************** -->
    <div id="shop_info">
        <div id="shop_info_wrap">
            <div class="container_12">
                <div id="shop_description" class="grid_3">
                    <h2>Shoppica Theme</h2>
                    <p>Pellentesque a arcu ut nisi semper cursus. Nullam vehicula dapibus ultrices. Integer nunc risus, fringilla ut hendrerit a, dapibus vestibulum ante. In ullamcorper erat et orci mattis rutrum et a enim. Curabitur semper, erat sit amet condimentum volutpat, enim nisi auctor augue, id fringilla est dui non lectus. Cras in urna ante, sit amet dignissim orci. Proin nibh urna, consectetur vitae placerat luctus.</p>
                </div>
                <div id="shop_contacts" class="grid_3">
                    <h2>Contact Us</h2>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="middle"><span class="s_icon_32"><span class="s_icon s_phone_32"></span>5234452 <br /></span></td>
                        </tr>
                        <tr>
                            <td valign="middle"><span class="s_icon_32"><span class="s_icon s_fax_32"></span>5234452 <br /></span></td>
                        </tr>
                        <tr>
                            <td valign="middle"><span class="s_icon_32"><span class="s_icon s_mail_32"></span>pinko@example.com <br /> pinko@example.com</span></td>
                        </tr>
                        <tr>
                            <td valign="middle"><span class="s_icon_32"><span class="s_icon s_skype_32"></span>my_skype <br /> </span></td>
                        </tr>
                    </table>
                </div>
                <div id="twitter" class="grid_3">
                    <h2>Twitter</h2>
                    <ul id="twitter_update_list"><li></li></ul>
                    <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
                    <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/themeburn.json?callback=twitterCallback2&amp;count=2"></script>
                </div>
                <div id="facebook" class="grid_3">
                    <h2>Facebook</h2>
                    <div class="s_widget_holder">
                        <fb:fan profileid="111188056908" stream="0" connections="6" logobar="0" width="220" css="http://svest.no-ip.org/test/opencart/catalog/view/theme/shoppica/stylesheet/facebook.css.php?300"></fb:fan>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- end of shop info -->



    <!-- ********************** -->
    <!--      F O O T E R       -->
    <!-- ********************** -->
    <div id="footer" class="container_12">
        <div id="footer_categories" class="clearfix">
            <div class="grid_2">
                <h2>Electronics</h2>
                <ul class="s_list_1">
                    <li><a href="">Digital Cameras</a></li>
                    <li><a href="">Home Audio</a></li>
                    <li><a href="">Home Cinema</a></li>
                    <li><a href="">Cell Phones</a></li>
                    <li><a href="">MP3 Players</a></li>
                    <li><a href="">Car-Audio</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h2>Computers</h2>
                <ul class="s_list_1">
                    <li><a href="">Desktops</a></li>
                    <li><a href="">Laptops</a></li>
                    <li><a href="">Monitors</a></li>
                    <li><a href="">Components</a></li>
                    <li><a href="">Software</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h2>Clothing</h2>
                <ul class="s_list_1">
                    <li><a href="">Women's Clothing</a></li>
                    <li><a href="">Men's Clothing</a></li>
                    <li><a href="">Boys</a></li>
                    <li><a href="">Girls</a></li>
                    <li><a href="">Infants and toddlers</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h2>Shoes</h2>
                <ul class="s_list_1">
                    <li><a href="">Women's Shoes</a></li>
                    <li><a href="">Men's Shoes</a></li>
                    <li><a href="">Kids' Shoes</a></li>
                    <li><a href="">Sportswear</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h2>Gifts</h2>
                <ul class="s_list_1">
                    <li><a href="">Perfumes</a></li>
                    <li><a href="">Spirits and Beers</a></li>
                    <li><a href="">Wines</a></li>
                    <li><a href="">Flowers</a></li>
                    <li><a href="">Chocolates and sweets</a></li>
                    <li><a href="">Toys and Games</a></li>
                </ul>
            </div>
            <div class="grid_2">
                <h2>At home</h2>
                <ul class="s_list_1">
                    <li><a href="">Furniture</a></li>
                    <li><a href="">Garden</a></li>
                    <li><a href="">Appliances</a></li>
                    <li><a href="">Pet Supplies</a></li>
                    <li><a href="">Tools and Accessories</a></li>
                    <li><a href="">Lighting</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <div class="grid_12 border_eee"></div>
        </div>
        <div id="payments" class="right clearfix">
            <img src="images/payments/discover_straight_32px.png" alt="" />
            <img src="images/payments/american_express_straight_32px.png" alt="" />
            <img src="images/payments/moneybookers_straight_32px.png" alt="" />
            <img src="images/payments/paypal_straight_32px.png" alt="" />
            <img src="images/payments/visa_straight_32px.png" alt="" />
            <img src="images/payments/american_express_straight_32px.png" alt="" />
        </div>
        <p id="copy">&copy; Copyright 2011. Powered by <a class="blue" href="">Open Cart</a>.<br /> <a class="s_main_color" href="http://www.shoppica.net">Shoppica theme</a> made by <a href="http://www.themeburn.com">ThemeBurn.com</a></p>
    </div>
    <!-- end of FOOTER -->

</div>

<div id="fb-root"></div>




<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
