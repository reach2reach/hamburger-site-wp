<footer class="l-footer p-footer">
    <section class="p-footer__information">
    <!--footerのナビゲーションメニュー設定-->
    <?php 
        wp_nav_menu( array( 
            'theme_location' => 'Footer Menu' 
        ) ); 
    ?>    
    </section>
    <p class="p-footer__copyright"><small>Copyright : RaiseTech</small></p>     
</footer>
<?php wp_footer();?>