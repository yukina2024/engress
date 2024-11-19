
//ハンバーガーメニュー
jQuery(document).ready(function($) {
    const menu = $('#l-sp-nav'); // メニュー部分
    const openBtn = $('#sp_menu_btn'); // ハンバーガーボタン
    // ハンバーガーボタンをクリックしたとき
    openBtn.on('click', function() {
        $(this).toggleClass('is-active'); // ボタンのis-activeクラスの切り替え
        menu.toggleClass('is-active'); // メニューのis-activeクラスの切り替え

        if (menu.hasClass('is-active')) {
            disableScroll(); // スクロールを無効化
        } else {
            enableScroll(); // スクロールを有効化
        }
    });

    // メニューリンクをクリックしたとき
    $('.l-sp-nav__link').on('click', function(e) {
        e.preventDefault();
        const target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);

        // メニューとボタンからis-activeクラスを削除して閉じる
        menu.removeClass('is-active');
        openBtn.removeClass('is-active');
        enableScroll(); // スクロールを有効化
    });
});

jQuery(document).ready(function($) {
    $('.l-sp-nav__btn-link').on('click', function() {
        console.log("リンクがクリックされました:", $(this).attr('href'));
        // ここでリンク先に遷移
    });
});