<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">

            </div>
        </div>
        <div style="margin-bottom: 20px;"></div>


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    [
                        'label' => 'Главная',
                        'icon' => 'home',
                        'url' => 'site/index',
                    ],
                    [
                        'label' => 'Страницы',
                        'icon' => 'th-list',
                        'url' => ['sheets/index'],
                    ],
                    [
                        'label' => 'Изображения',
                        'icon' => 'picture-o',
                        'url' => ['fon/index'],
                    ],
                    ['label' => 'Концерты', 'icon' => 'music', 'url' => ['gigs/index'],
                    ],
                    ['label' => 'Социальные сети', 'icon' => 'share-square', 'url' => ['social/index'],
                    ],
                ],

            ]
        ) ?>

    </section>

</aside>