<?php get_header(); ?> 

<?php get_sidebar(); ?>

    <main class="l-main p-main">
        <section class="p-main--404page">
            <h2> <?php _e('404 Not Found', 'hamburger'); ?></h2>
            <p class="p-main--404page__text">指定された以下のページは存在しないか、または移動した可能性があります。</p>
            <!--ページurl取得-->
            <p class="p-main--404page__url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
            <!--ホームへ戻る-->
            <p class="p-main--404page__home">URLをご確認の上再読み込みするか、<a href="<?php echo esc_url(home_url());?>">トップページへ</a>お戻りください。</p>
        </section>  
    </main>
</div>
<?php get_footer(); ?>
</body>
</html> 
 

