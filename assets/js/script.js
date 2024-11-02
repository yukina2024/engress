
//ハンバーガーメニュー
$(document).ready(function() {
    // ハンバーガーメニューボタンのクリックでメニューを開閉する
    $('#sp_menu_btn').on('click', function() {
        $('#gloval-nav').toggleClass('is-active'); // ナビゲーションメニューにクラスを追加/削除
        $(this).toggleClass('is-active'); // ボタン自体にもクラスを追加/削除
    });

    // ハンバーガーメニュー内のリンククリックでメニューを閉じる
    $('.gloval-nav__link').on('click', function(e) {
        e.preventDefault(); // デフォルトのリンク動作を防ぐ

        // スクロール処理
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 800);

        // メニューを閉じる
        $('#gloval-nav').removeClass('is-active');
        $('#sp_menu_btn').removeClass('is-active'); // ボタンのクラスも削除
    });
});