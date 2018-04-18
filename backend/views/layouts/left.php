<aside class="main-sidebar">

    <section class="sidebar">


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'encodeLabels' => false,
                'items' => [
                    [
                        'label' => 'Заказы ' . \dvizh\order\widgets\CountByStatusInformer::widget([
                                'renderEmpty' => true,
                                'iTagCssClass' => '',
                                'aTag' => false
                            ]) ,
                        //'icon' => 'fa fa-suitcase',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'url' => ['/order/order/index']
                    ],
                         [
                        'label' => 'Заявки ' . backend\components\CountByStatusInformermail::widget([
                                'renderEmpty' => true,
                                'iTagCssClass' => '',
                                'aTag' => false
                            ]) ,
                        'icon' => '	fa fa-envelope-o',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'url' => ['/modalorder/index']
                    ],



                    ['label' => 'Магазин', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Магазин',
                        'icon' => 'shopping-bag',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [

                            ['label' => 'Товары', 'url' => ['/shop/product']],
                            [
                                'label' => 'Комплексные обеды',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Обеды', 'url' => ['/productext/index']],
                                    ['label' => 'Составляющие', 'url' => ['/productexitems/index']],

                                ],
                            ],


                            ['label' => 'Категории', 'url' => ['/shop/category']],
                            ['label' => 'Производители', 'url' => ['/shop/producer']],
                            ['label' => 'Фильтры', 'url' => ['/filter/filter']],
                            ['label' => 'Боковое меню', 'url' => ['/leftmenu/index']],
                            ['label' => 'Верхние категории', 'url' => ['/topmenutoslider/index']],
                        ],
                    ],
                    [
                        'label' => 'Маркетинг',
                        'icon' => 'area-chart',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Промокоды', 'url' => ['/promocode/promo-code/index']],
                            ['label' => 'Сертификаты', 'url' => ['/certificate/certificate/index']],
                        ],
                    ],
                    [
                        'label' => 'Сайт',
                        'icon' => 'sitemap',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Пользователи', 'url' => ['/user/admin/index']],
                            ['label' => 'Слайдер', 'url' => ['/slider/index']],
                            ['label' => 'Новости', 'url' => ['/news/index']],
                            ['label' => 'Страницы', 'url' => ['/page/index']],
                        ],
                    ],
                    [
                        'label' => 'Настройки',
                        'icon' => 'cogs',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Поля контента', 'url' => ['/field/field/index']],
                            ['label' => 'Поля заказа', 'url' => ['/order/field/index']],
                            ['label' => 'Типы цен', 'url' => ['/shop/price-type']],
                            ['label' => 'Типы доставки', 'url' => ['/order/shipping-type/index']],
                            ['label' => 'Типы оплаты', 'url' => ['/order/payment-type/index']],
                            ['label' => 'Настройки сайта', 'url' => ['/settings/default/index']],
                        ]
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>
