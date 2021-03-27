<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                    [
                        'label' => 'Data Pembangunan',
                        'icon' => 'bank',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pembangunan', 'icon' => 'road', 'url' => ['/pembangunan/index']],
                            ['label' => 'Kategori Pembangunan', 'icon' => 'home', 'url' => ['/kategori-pembangunan/index']],
                            ['label' => 'Sumber Dana', 'icon' => 'gear', 'url' => ['/sumber-dana-pembangunan/index']],
                            ['label' => 'Mitra', 'icon' => 'gg-circle', 'url' => ['/mitra/index']],
                        ],
                    ],

                    [
                        'label' => 'Data Penduduk',
                        'icon' => 'book',
                        'url' => ['penduduk/index'],
                    ],

                    
                    [
                        'label' => 'Request Pembangunan',
                        'icon' => 'gear',
                        'url' => ['request-pembangunan/index'],
                    ],

                    [
                        'label' => 'Pengumuman',
                        'icon' => 'gg-circle',
                        'url' => ['pengumuman/index'],
                    ],

                    ['label' => 'Sign Out', 'icon' => 'lock', 'url' => ['site/logout']],
                ],
            ]
        ) ?>

    </section>

</aside>
