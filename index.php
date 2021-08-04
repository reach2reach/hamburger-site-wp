<?php get_header(); ?> <!--header.phpを呼び出すテンプレートタグ-->

<?php get_sidebar(); ?> <!--siderbar.phpを呼び出すテンプレートタグ-->
        
        <main class="l-main p-main">
            <div class="p-main-visual">
                <h2>ダミーサイト</h2>
            </div>

            <div class="l-main-wrapper">
                <article class="p-main__article--TakeOut">

                <!--TakeOutカテゴリー取得--archiveページへ--> 
            <?php       
                $cat = get_cat_ID('Take Out'); //カテゴリー名からカテゴリーIDを取得
                $cat_link = get_category_link($cat);//取り出したカテゴリーIDをget_category_linkに指定
            ?>
                    <h3 class='p-main__article__title--TakeOut'>
                        <a href="<?php echo $cat_link ?>">Take Out</a> <!--指定したカテゴリーページのURLを出力-->
                    </h3>
                    <div class="l-TakeOut__section">
                    
                        <section class="l-TakeOut__list p-TakeOut__list">
                            <h4>Take Out</h4>
                            <a href="<?php echo $cat_link ?>">当店のテイクアウトで利用できる商品を掲載しています</a>
                        </section>
                        <section class="l-TakeOut__list p-TakeOut__list">
                            <h4>Take Out</h4>
                            <a href="<?php echo $cat_link ?>">当店のテイクアウトで利用できる商品を掲載しています</a>
                        </section>
                    </div>
                </article>

                <article class="p-main__article--EatIn">
                <?php       
                    $cat = get_cat_ID('Eat In');
                    $cat_link = get_category_link($cat);
                ?>
                    <h3 class="p-main__article__title--EatIn">
                        <a href="<?php echo $cat_link ?>">Eat In</a>
                    </h3>
                    <div class="l-TakeOut__section">
                        <section class="l-TakeOut__list p-TakeOut__list">
                            <h4>Eat In</h4>
                            <a href="<?php echo $cat_link ?>">当店の店内で利用できる商品を掲載しています</a>
                        </section>
                        <section class="l-TakeOut__list p-TakeOut__list">
                            <h4>Eat In</h4>
                            <a href="<?php echo $cat_link ?>">当店の店内で利用できる商品を掲載しています</a>
                        </section>
                    </div>
                </article>
            </div>

            <div class="p-main__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6730.9908822076395!2d131.46639580959607!3d33.31926543065933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a7a18b11e30f%3A0x7d092fbf0d6c8086!2sJigoku%20Mushi!5e0!3m2!1sen!2sjp!4v1625299432638!5m2!1sen!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="p-main__map__layer"></div>
                
                <section class="p-main__map__content">
                    <h5 class="p-main__map__heading">見出しが入ります</h5>
                    <p class="p-main__map__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </section>
            </div>
        </main> 
    </div>
    <?php get_footer(); ?> <!--footer.phpを呼び出すテンプレートタグ-->
</body>
</html>