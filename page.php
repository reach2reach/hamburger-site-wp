<?php get_header(); ?> 

<?php get_sidebar(); ?>

        <main class="l-main p-main">
            <div class="p-main-visual--page">
                <h2><?php the_title(); ?></h2>
            </div>

            <div class="l-main-wrapper--single l-main-wrapper--pages">
                <section class="p-main--page">
                    <?php if(have_posts()): 
                        while(have_posts()): 
                            the_post(); ?>
                            <?php the_content(); ?> <!--投稿の本文を出力->ループの中で使わないといけない-->
                </section>
            </div>
                <?php endwhile; 
                else:
                    ?><p>表示する記事がありません</p>
                <?php endif; ?>  
                <?php wp_list_comments(); ?> <!--テーマチェックエラーのため追記-->
        </main>
</div>
<?php get_footer(); ?>
</body>
</html>