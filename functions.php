<?php
    //=================================================
    //テーマサポート
    //=================================================
    add_theme_support( 'menus' ); //カスタムメニュー機能追加→管理画面にメニューという項目が表示
    add_theme_support( 'title-tag' ); //ページ種類に応じてタイトルタグを自動的に表示
    add_theme_support('post-thumbnails'); //アイキャッチ画像の項目追加
    add_theme_support('automatic-feed-links');//フィードのlinkを自動出力する

    //=================================================
    //タイトル出力
    //=================================================
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //もし表示されたページがフロントページ＆メインブログページなら
            $title = get_bloginfo( 'name', 'display' ); //タイトルはサイトのタイトル名を取得
        } elseif ( is_singular() ) { //投稿・カスタム投稿・固定ページ・添付ファイルのシングルページなら
            $title = single_post_title( '', false ); //タイトルは投稿ページのタイトルを表示
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' ); //フィルターフックで処理して出力

    //=================================================
    //スタイルシート,スクリプトを読み込むタグを出力
    //=================================================

    function hamburger_script() {
        //---------------
        //FontAwsome
        //---------------
        wp_enqueue_script( 'FontAwesome', '//kit.fontawesome.com/9c4b047b8f.js', array(),'5.15.3',true); //スクリプトの読み込み位置（trueで/body前、falseで/head前, 初期値はfalse）
        
        //crossorigin=”anonymous” を付加するフィルターフック
        add_filter('script_loader_tag', 'custom_script_loader_tag', 10, 2);
        function custom_script_loader_tag($tag, $handle) {
            if($handle !== 'FontAwesome') { //handleのところに、crossorigin="anonymous" を入れたいスクリプトの名前（wp_enqueue_script の第1引数,font-awesome)
                return $tag;
            }
            return str_replace('></script>', ' crossorigin="anonymous"></script>', $tag);
            }
        
        //---------------
        //google-font
        //---------------
        wp_enqueue_style( 'mplus 1m', '//mplus-webfonts.sourceforge.jp/mplus_webfonts.css', array() );
        wp_enqueue_style( 'Roboto', '//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array() );
      

        //---------------
        //css
        //---------------
        wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array(),'' );
        wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );

        //--------------------------------------------
        //jquery
        //--------------------------------------------
        //wp_deregister_script('jquery'); //デフォルトの jQuery を解除-->＄をjQueryと書き込まなくて良くなる。
        wp_enqueue_script( 'jquery',  get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), '3.6.0',true);
        wp_enqueue_script( 'gnav', get_template_directory_uri() . '/js/gnav.js', array('jquery'), '1.0.0',true);
    }
    add_action('wp_enqueue_scripts', 'hamburger_script');


    //=============================================
    // ナビゲーションメニュー設定
    //=============================================

    function register_hamburger_menus() { 
        register_nav_menus(
            array(
                'global-nav-menu' => 'Global Menu', //globalメニューの追加
                'footer-nav-menu' => 'Footer Menu', //Footerメニューの追加
            )
        );
    }
    add_action( 'after_setup_theme', 'register_hamburger_menus' );

    //=========================================================================
    //editor-style.cssの読み込み--->フロントのデザインをそのままビジュアルエディターで表現
    //=========================================================================

    function Hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/editor-style.css" );
    }
    add_action( 'admin_init', 'Hamburger_theme_add_editor_styles' );


    //==============================================
    //検索機能の設定
    //==============================================

    // 未入力検索の結果を、全部の記事表示から非表示に変更する関数
    function mycus_empty_and_blank_search_invalid_func( $search, \WP_Query $q ) {
        if ( $q->is_search() && $q->is_main_query() && ! $q->is_admin() ) {
            $s = $q->get( 's' );
            $s = trim( $s );
        if ( empty( $s ) ) {
            $search .=" AND 0=1 ";
        }
        }
        return $search;
    }
    add_filter( 'posts_search', 'mycus_empty_and_blank_search_invalid_func', 10, 2 );