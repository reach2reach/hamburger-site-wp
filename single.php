<?php get_header(); ?> 

<?php get_sidebar(); ?>

        <main class="l-main p-main">
        <!--アイキャッチ画像を背景として表示させる-->
            <div class="p-main-visual--single" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                <h2><?php the_title(); ?></h2>
            </div>

            <div class="l-main-wrapper--single l-main-wrapper--pages">

                    <?php if(have_posts()): 
                        while(have_posts()): 
                            the_post(); ?>
                            <?php remove_filter ('the_content', 'wpautop'); ?><!--WordPressで自動生成されるタグ,<br>や<p>などを制御する-->
                            
                            <?php the_content(); ?> <!--投稿の本文を出力->ループの中で使わないといけない-->
                            <?php wp_link_pages(); // 記事内ページャー ?>
            </div>
                    <?php endwhile; 
                else:
                    ?><p>表示する記事がありません</p>
                <?php endif; ?>
                <?php posts_nav_link(); ?> <!--テーマチェックでエラーのため追記-->
        </main>
</div>
<?php get_footer(); ?>
</body>
</html>