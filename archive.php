<?php get_header(); ?> 

<?php get_sidebar(); ?>     

            <main class="l-main p-main">

                <div class="p-main-visual--archive">
                
                    <h2>Menu:</h2>
                    <?php if(is_category()) : ?> <!--カテゴリーの場合-->
                    <p><?php single_cat_title( '', true ); ?></p> <!--カテゴリー名取得-->
                    <? endif; ?>
                </div>
    
                <div class="l-main-wrapper--archive">
                    <section class="p-archive__content">
                        <h3 class="p-archive__heading">小見出しが入ります</h3>
                        <p class="p-archive__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>
                    
                    <div class="l-menu-wrapper">
                    <!--------ループ処理の作成-------->
                        <?php
                            if (have_posts()) : //投稿データがあるかどうかの条件分岐＝表示させるデータがあるかどうか
                                while (have_posts()) : //表示させるデータがある場合はループし続ける
                                    the_post(); ?> <!--$wp_queryから順にデータを取り出して「$post」へ格納し、次のデータへと進める-->

                        <!--ここからループさせたい内容を記述 ↓↓-->  
                        
                        <!--投稿を囲む要素に自動でクラスを割り当て、種類によって異なるスタイルを当てることができる-->
                        <article class="l-menu p-menu" id="post-<?php the_ID();?>" <?php post_class(); ?>>

                        <!--設定したアイキャッチ画像を出力する-->
                            <img class="p-menu__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
                           
                            <section class="p-menu__content">
                                <h4 class="p-menu__content__title"><?php the_title(); ?></h4> 
                                <?php the_excerpt(); ?> <!--抜粋文を出力する-->
                                <a href="<?php the_permalink(); ?>" class="c-button--detail">詳しく見る</a> <!--投稿記事のURLを出力→singleページへ-->
                            </section>
                        </article>
                            <?php endwhile; // ループ処理ここで終了。投稿データがまだあればwhileに戻る。
                        else : // 表示する投稿がない場合は
                                ?><p>表示する記事がありません</p> 
                        <?php endif; ?> <!--if文の終わり-->

                <div class="l-pagination"> <!--ページ送り, WP-PageNaviプラグイン追加-->
                    <section class="c-pagination">
                        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?> 
                    </section>         
                </div>
            </main>
</div>
<?php get_footer(); ?> 
    </body>
    </html>