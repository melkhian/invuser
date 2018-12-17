<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

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
                    ['label' => 'Gestión de Dependencias', 'icon' => 'building', 'url' => ['/dependencias/']],
                    ['label' => 'Gestión de Usuarios', 'icon' => 'users', 'url' => ['/usuarios/']],
                    /*['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],*/
                    [
                        'label' => 'Gestión de Roles',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['/roles/'],],
                            ['label' => 'Usuarios por Rol', 'icon' => 'dashboard', 'url' => ['/usuarol/'],],
                            ['label' => 'Roles por Interfaz', 'icon' => 'dashboard', 'url' => ['/rolinte/'],],
/*                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                        [
                        'label' => 'Gestión de Funciones',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Interfaces', 'icon' => 'file-code-o', 'url' => ['/interfaces/'],],
                            ['label' => 'Comandos', 'icon' => 'dashboard', 'url' => ['/comandos/'],],
                            ['label' => 'Interfaces por Comandos', 'icon' => 'dashboard', 'url' => ['/intecoma/'],],
                        ],
                    ],

                                            [
                        'label' => 'Gestión de Tipo y Tipos',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tipo', 'icon' => 'file-code-o', 'url' => ['/tipo/'],],
                            ['label' => 'Tipos', 'icon' => 'dashboard', 'url' => ['/tipos/'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
