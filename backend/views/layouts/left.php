<aside class="main-sidebar">

    <section class="sidebar">

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                    [
                        'label' => 'Master Desa',
                        'icon' => 'bank',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Dusun', 'icon' => 'road', 'url' => ['dusun/index']],
                            ['label' => 'Rt/Rw', 'icon' => 'home', 'url' => ['rt-rw/index']],
                        ],
                    ],

                    [
                        'label' => 'Master Penduduk',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Penduduk', 'icon' => 'users', 'url' => ['penduduk/index']],
                            ['label' => 'Agama', 'icon' => 'users', 'url' => ['agama/index']],
                            ['label' => 'Pendidikan', 'icon' => 'users', 'url' => ['pendidikan/index']],
                            ['label' => 'Pekerjaan', 'icon' => 'users', 'url' => ['pekerjaan/index']],
                        ],
                    ],

                    
                    [
                        'label' => 'Master Pembangunan',
                        'icon' => 'gear',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Progres Pembangunan', 'icon' => 'book', 'url' => ['lapor-progres/index']],
                            ['label' => 'Status Pembangunan', 'icon' => 'book', 'url' => ['status-pembangunan/index']],
                            ['label' => 'Kategori Pembangunan', 'icon' => 'book', 'url' => ['kategori-pembangunan/index']],
                            ['label' => 'Sumber Dana Pembangunan', 'icon' => 'book', 'url' => ['sumber-dana-pembangunan/index']],
                            ['label' => 'Pembangunan', 'icon' => 'book', 'url' => ['pembangunan/index']],
                            ['label' => 'Mitra', 'icon' => 'book', 'url' => ['mitra/index']],
                        ],
                    ],

                    [
                        'label' => 'Master User',
                        'icon' => 'gg-circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pengguna', 'icon' => 'user', 'url' => ['user/index']],
                            ['label' => 'Roles', 'icon' => 'tag', 'url' => ['roles/index'],],
                        ],
                    ],

                    ['label' => 'Pengumuman', 'icon' => 'bell', 'url' => ['pengumuman/index']],
                    ['label' => 'Sign Out', 'icon' => 'lock', 'url' => ['site/logout']],
                ],
            ]
        ) ?>

    </section>

</aside>
