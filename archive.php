<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Hamburger (ハンバーガー)</title>
        <meta name="description" content="ハンバーガーサイト RaiseTech課題">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://mplus-webfonts.sourceforge.jp/mplus_webfonts.css">
        <script src="https://kit.fontawesome.com/9c4b047b8f.js" crossorigin="anonymous"></script>
        <link href="css/style.css" rel="stylesheet">     
    </head>

    <body>
        <div class="l-wrapper">
            <div id="fadeLayer"></div> <!--画面全体を覆うフェード用のレイヤ-->
            <div class="c-button--menu"> 
                <button class="c-button--menu is-menu">Menu</button>
                <button class="c-button--menu__close is-menu"></button>
            </div>
            <header class="l-header p-header">
                <h1 class="p-header__title">
                    <a href="#">Hamburger</a>
                </h1>
                <form class="p-header__search">
                    <input class="p-header__search-box fas fa-search" placeholder="&#xf002;" type="search">
                    <input class="c-button__search-btn" type="submit" value="検索">
                </form>
            </header>
    
            <aside class="l-sidebar p-sidebar">
                <nav class="p-global-nav">
                    <p class="p-global-nav__title">Menu</p>
                    <ul class="p-global-nav__menu">
                        <li class="p-global-nav__menu__title"><a href="#">バーガー</a>
                            <ul class="p-global-nav__menu__list">
                                <li class="p-global-nav__menu__list__item"><a href="#">ハンバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">チーズバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">テリヤキバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">アボカドバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">フィッシュバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">ベーコンバーガー</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">チキンバーガー</a></li>
                            </ul>
                        </li>
              
                        <li class="p-global-nav__menu__title"><a href="#">サイド</a>
                            <ul class="p-global-nav__menu__list">
                                <li class="p-global-nav__menu__list__item"><a href="#">ポテト</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">サラダ</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">ナゲット</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">コーン</a></li>
                            </ul>
                        </li> 
              
                        <li class="p-global-nav__menu__title"><a href="#">ドリンク</a>
                            <ul class="p-global-nav__menu__list">
                                <li class="p-global-nav__menu__list__item"><a href="#">コーラ</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">ファンタ</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">オレンジ</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">アップル</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">紅茶（Ice/Hot）</a></li>
                                <li class="p-global-nav__menu__list__item"><a href="#">コーヒー（Ice/Hot）</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="l-main p-main">

                <div class="p-main-visual--archive">
                    <h2>Menu:</h2>
                    <p>チーズバーガー</p>
                </div>
    
                <div class="l-main-wrapper--archive">
                    <section class="p-archive__content">
                        <h3 class="p-archive__heading">小見出しが入ります</h3>
                        <p class="p-archive__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </section>
                    
                    <div class="l-menu-wrapper">
                        <article class="l-menu p-menu">
                            <img class="p-menu__img" src="../images/menu-cheezburger.png" alt="cheezburger">
                            <section class="p-menu__content">
                                <h4 class="p-menu__content__title">チーズバーガー</h4>
                                <h5 class="p-menu__content__heading">小見出しが入ります</h5>
                                <p class="p-menu__content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#" class="c-button--detail">詳しく見る</a>
                            </section>
                        </article>

                        <article class="l-menu p-menu">
                            <img class="p-menu__img" src="../images/menu-cheezburger.png" alt="cheezburger">
                            <section class="p-menu__content">
                                <h4 class="p-menu__content__title">ダブルチーズバーガー</h4>
                                <h5 class="p-menu__content__heading">小見出しが入ります</h5>
                                <p class="p-menu__content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#" class="c-button--detail">詳しく見る</a>
                            </section>
                        </article>


                        <article class="l-menu p-menu">
                            <img class="p-menu__img" src="../images/menu-cheezburger.png" alt="cheezburger">
                            <section class="p-menu__content">
                                <h4 class="p-menu__content__title">スペシャルチーズバーガー</h4>
                                <h5 class="p-menu__content__heading">小見出しが入ります</h5>
                                <p class="p-menu__content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                <a href="#" class="c-button--detail">詳しく見る</a>
                            </section>
                        </article>
                    </div>   
                </div>

                <div class="l-pagination"> <!--ページ送りのタグ-->
                    <section class="c-pagination">
                        <p class="c-pagination__page-numbers">page 1/10</p>
                        <a class="c-pagination__page-numbers--prev" href="#">&lt;&lt; 前へ</a>
                        
                        <ul class="c-pagination__page-numbers__list">
                            <li>&lt;&lt;</li>
                            <li><a class="current" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#">7</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li>&gt;&gt;</li>
                        </ul>
                        <a class="c-pagination__page-numbers--next" href="#">次へ &gt;&gt;</a>
                    </section>          
                </div>
            </main>

            <footer class="l-footer p-footer">
                    <div class="p-footer__information">
                     <a class="p-footer__information__shop" href="#">ショップ情報</a>
                     <a class="p-footer__information__history" href="#">ヒストリー</a>
                    </div>
                    <p class="p-footer__copyright"><small>Copyright : RaiseTech</small></p>     
            </footer>
        </div>

        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/gnav.js"></script>
    </body>
    </html>