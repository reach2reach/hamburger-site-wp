<!--if文で条件分岐し、検索結果ページにいる場合は$search_queryという変数に検索単語を代入-->
<?php if( is_search() ) $search_query = get_search_query(); ?>

<!--methodにgetを指定することでGETリクエストにてaction先→homeに送信-->
<form class="p-header__search" method="get" action="<?php echo home_url('/'); ?>"> 

<!--WordPressの検索機能を使用するには”s”を記述--> 
<!--$search_queryに値が入っていたら、inputのvalueに検索単語を入れる->これで検索ワードが検索後も残る-->
    <input class="p-header__search-box fas fa-search" placeholder="&#xf002;" type="search" name="s" id="s" value="<?php if( $search_query ) echo $search_query; ?>">
    <input class="c-button__search-btn" type="submit" value="検索">
</form>