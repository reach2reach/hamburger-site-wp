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
            <div class="p-main-visual--single">
                <h2>h1 チーズバーガー</h2>
            </div>

            <div class="l-main-wrapper--single l-main-wrapper--pages">
                <section class="p-top__content">
                    <h2>見出しh2</h2>
                    <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3>見出しh3</h3>
                    <h4>見出しh4</h4>
                    <h4>見出しh3</h4>
                    <h4>見出しh4</h4>
                    <h4>見出しh5</h4>
                    <h4>見出しh6</h4>
                </section>

                <section class="p-blockquote"> <!--blockquote=引用する時のタグ-->
                    <blockquote class="p-blockqupte__text">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</blockquote>
                    <p class="p-blockquote__reference">出典先：<a href="#">○○○○○○○○○○○○○</a></p>
                </section>

                <section class="p-food">
                    <img class="p-food__main-photo" src="../images/food_wide.png" alt="food">

                    <article class="p-food__entry--top">
                        <img class="p-food__entry--top__image" src="../images/food.png" alt="food">
                        <p class="p-food__entry--top__text"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </article>

                    <article class="p-food__entry--bottom">
                        <img class="p-food__entry--bottom__image" src="../images/food.png" alt="food">
                        <p class="p-food__entry--bottom__text"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </article>

                    <img class="p-food__sub-photo" src="../images/food.png" alt="food">
                </section>

                <section class="p-photo__list">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                    <img class="p-photo__list__item" src="../images/food.png" alt="food">
                </section>

                <section class="p-list">
                    <div class="p-list--block1">
                        <ul class="p-list__item--a">
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                        <ul class="p-list__item--b">
                            <li>1.リスト2リスト2リスト2</li>
                            <li>2.リスト2リスト2リスト2</li>
                        </ul>
                        <ul class="p-list__item--a">
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                    </div>
                    <div class="p-list--block2">
                        <ul class="p-list__item--a">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                        <ul class="p-list__item--b">
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ul>
                        <ul class="p-list__item--a">
                            <li>リストリストリスト</li>
                            <li>リストリストリスト</li>
                        </ul>
                    </div>
                </section>

                <pre class="p-code"> <!--preタグ＝preformatted text（整形済みテキスト）の略、ソース中のスペースや改行などをそのまま等幅フォントで表示-->
                    <code> <!--<code>タグで囲んだテキストは、プログラムのソースコード。インデントや改行をしているソースコードを表示させるときには、<pre>タグで更に外側を囲む-->
            &lt;html&gt; <!--不等号を文章内で扱う場合には&lt;, &gt;による文字実体参照を用いる。&lt;= <  &gt;= >  -->
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
            &lt;/html&gt;
                    </code>    
                </pre>

                <section class="c-table">
                    <table class="c-table__list">
                        <tr> <!--Table Rowの略。行全体-->
                            <td class="c-table__list__item--a">テーブル</td> <!--Table Dataの略。trの中で使う-->
                            <td class="c-table__list__item--b">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-table__list__item--a">テーブル</td>
                            <td class="c-table__list__item--b">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-table__list__item--a">テーブル</td>
                            <td class="c-table__list__item--b">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-table__list__item--a">テーブル</td>
                            <td class="c-table__list__item--b">テーブル</td>
                        </tr>
                    </table>
                </section>
                 
                <div>
                    <button class="c-button" type="button">ボタン</button>
                </div>
                
                <section class="p-text--bold">
                    <p>boldboldboldboldboldboldbold</p>
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