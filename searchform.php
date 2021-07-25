<form class="p-header__search" method="get" action="<?php echo home_url('/'); ?>"> <!--methodにgetを指定することでGETリクエストにてaction先→homeに送信-->
    <input class="p-header__search-box fas fa-search" placeholder="&#xf002;" type="search" name="s" id="s"><!--WordPressの検索機能を使用するには”s”を記述-->
    <input class="c-button__search-btn" type="submit" value="検索">
</form>