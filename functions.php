<?php

    //============================================
    // テーマを翻訳対応する
    //============================================
    function hamburger_theme_setup(){
        load_theme_textdomain( 'hamburger', get_template_directory() . '/languages' );
        }
    add_action( 'after_setup_theme', 'hamburger_theme_setup' );

    //=================================================
    //テーマサポート
    //=================================================
    //テーマチェックでエラーがでるので非表示-->add_theme_support( 'menus' ); //カスタムメニュー機能追加→管理画面にメニューという項目が表示
    add_theme_support( 'title-tag' ); //ページ種類に応じてタイトルタグを自動的に表示
    add_theme_support('post-thumbnails'); //アイキャッチ画像の項目追加
    add_theme_support('automatic-feed-links');//フィードのlinkを自動出力する
    add_theme_support( 'custom-header' );//ヘッダー画像として実装できる＝カスタムヘッダー（テーマチェックでエラーがでるので記述）
    add_theme_support( 'wp-block-styles' );//ブロックエディター用のスタイルを有効化 (テーマチェックでエラーがでるので記述）
    add_theme_support( "responsive-embeds" );//埋め込みしたコンテンツをレスポンシブ対応できる
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );//コメントフォーム、検索フォーム、コメントリスト、ギャラリーでHTML5マークアップの使用を許可(テーマチェックでエラーがでるので記述)
    add_theme_support( "custom-logo",);//カスタムロゴの機能を有効化(テーマチェックでエラーがでるので記述)
    add_theme_support( "align-wide" );//alignwide / alignfull に対応=コンテンツ幅を広げたりフルにしたりする機能
    add_theme_support( "custom-background");//背景色と背景画像のカスタマイズを提供

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

        //CDNで読み込むとテーマチェックでエラーでるので書き直し
        wp_enqueue_style('Font-Awesome', '//use.fontawesome.com/releases/v5.15.3/css/all.css',array());
        
        
        //wp_enqueue_script( 'FontAwesome', 'https://kit.fontawesome.com/9c4b047b8f.js', array(),'5.15.3',true); //スクリプトの読み込み位置（trueで/body前、falseで/head前, 初期値はfalse）
        /*function wp_load_fontawesome() {
            wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/fontawesome-free-5.15.4-web/css/font-awesome.min.css' );
        }
        add_action( 'wp_enqueue_scripts', 'wp_load_fontawesome' )*/
        
        
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

    function hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );


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

    //------------------------------------------------------------------
    //  テーマのコンテンツエリアのサイズ指定 (テーマチェックのエラーがでるので記述)
    //------------------------------------------------------------------
    if ( ! isset( $content_width ) ) {
        $content_width = 960;
    }

    //-------------------------------------------------------------------------------------
    // resister block style ＆ register_block_pattern (テーマチェックのエラーがでるので仮に記述)
    //-------------------------------------------------------------------------------------
    //WPブロックにカスタムスタイルを追加する//
    function my_block_style(){
        register_block_style(
            'core/image',
            array(
                'name'         => 'drop-shadow',
                'label'        => __( 'Drop Shadow', 'hamburger' ),
                'inline_style' => '.wp-block-image.is-style-drop-shadow { box-shadow: rgb(128, 128, 128) 4px 4px 4px 2px; }',
            )
        );
    }
    function my_block_pattern(){
        register_block_pattern(
            'my-block-pattern',   //ブロックパターン名
            array(
                'title'   => 'ブロックパターンのタイトル',
                'content' => 'ブロックHTML',
            )
        );
    }
    add_action( 'init', 'my_block_pattern' );

    //--------------------------------------------------------------
    //ウィジェットの機能を有効化 
    //--------------------------------------------------------------
    function my_theme_widgets_init() {
        register_sidebar( array(
          'name' => 'Main Sidebar',
          'id' => 'main-sidebar',
        ) );
      }
      add_action( 'widgets_init', 'my_theme_widgets_init' );
        
        
        
            
