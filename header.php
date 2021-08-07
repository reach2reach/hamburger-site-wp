<!doctype html>
<html lang="<?php language_attributes(); ?>"> <!--言語を自動出力する関数---->
    <head>
        <meta charset="UTF-8">
        <!--title削除→functions.phpに記述-->
        <meta name="description" content="ハンバーガーサイト RaiseTech課題">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>> <!--ページごとに自動的に異なるクラス属性を出力-->
<?php wp_body_open(); ?> <!--wp_body_openにフックしてコード出力--ページの表示では見えない要素、タグやメタデータなどの出力-->
    <div class="l-wrapper">
        <div id="fadeLayer"></div> <!--画面全体を覆うフェード用のレイヤ-->
        <div class="c-button--menu"> 
            <button class="c-button--menu is-menu">Menu</button>
            <button class="c-button--menu__close is-menu"></button>
        </div>
        <header class="l-header p-header">
            <h1 class="p-header__title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                <!--home_url関数でホーム（トップページ）のURLを取得-->
                <!--bloginfo（'name'）--管理画面の「設定 > 一般」で設定された「サイトのタイトル」を取得して表示-->
                <!--esc_url関数でURLをエスケープ-->
                <!--echoでURLをhref属性に出力--------->
            </h1>           
            <?php get_search_form(); ?>
        </header>