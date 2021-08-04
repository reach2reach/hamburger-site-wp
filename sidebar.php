<aside class="l-sidebar p-sidebar">
    <nav class="p-global-nav">
        <p class="p-global-nav__title">Menu</p>
        <!--サイドバーのナビゲーションメニュー設定-->
        <?php
            wp_nav_menu (array (
            'menu_class' => 'p-global-nav__menu',
            'container_class' => 'p-global-nav',
            'theme_location' => 'global-nav-menu',
          ));
          ?>
   </nav>
</aside>
        