//1.Uncaught TypeError: $ is not a functionというエラーが表示。「$は関数ではありません。」という意味.
//2.このエラーが発生した場合、ソースコードの$をjQueryに置き換えると動作
//3.$をjQueryに置き換える。

jQuery(function() {
    jQuery(".is-menu").on("click",function(){ //clickの度にis-openが加わったり外れたり
    jQuery('.is-menu,.p-sidebar,.p-global-nav__menu, #fadeLayer,html').toggleClass('is-open');
    });

    //window横幅がpcサイズになったらis-open外す//
    jQuery(window).on("resize", function() {
        var w = jQuery(window).width();
        if(w >=1025) {
            jQuery('.is-menu,.p-sidebar,.p-global-nav__menu, #fadeLayer,html').removeClass("is-open");
        }
        });
   });