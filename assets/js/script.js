
//ハンバーガーメニュー
jQuery(document).ready(function($) {
    // $ を jQuery として使用する
    const menu = document.getElementById('l-sp-nav');
    const openBtn = $('#sp_menu_btn');

    openBtn.on('click', function() {
        if (menu.open) {
            menu.close();
        } else {
            menu.showModal();
        }
        $(this).toggleClass('is-active');
    });

    $('.l-sp-nav__link').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);
        menu.close();
        openBtn.removeClass('is-active');
    });
});