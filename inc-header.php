<header class="l-header">
    <div class="l-header__container">
        <div class="l-header__wrapper">
            <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>" class="l-header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Engress-logo.svg" alt="logo" class="logo-img" id="header-logo">
                </a>
            </h1>
            <nav class="l-header__nav">
                <ul class="l-header__list">
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">ホーム</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">お知らせ</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('blog')); ?>" class="l-header__link">ブログ</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('price')); ?>" class="l-header__link">コース・料金</a></li>
                </ul>
            </nav>
        </div>
        <!-- l-header__left-wrapper -->
        <div class="l-header__right-wrapper">
            <div class="l-header__tel-wrapper c-tel">
                <p class="c-tel__time">平日08:00~20:00</p>
                <p class="c-tel__number"><a href="tel:0123-456-7890" class="c-tel__number-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/juwaki.png" alt="電話ロゴ">
                        0123-456-7890</a></p>
            </div>
            <div class="l-header__btn-wrapper">
                <a href="<?php echo esc_url(home_url('price')); ?>" class="l-header__btn-link">
                    <div class="l-header__btn c-btn-orange">
                        資料請求
                    </div>
                </a>
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-header__btn-link">
                    <div class="l-header__btn c-btn-blue">
                        お問い合わせ
                    </div>
                </a>
            </div>
            <!-- l-header__btn-wrapper -->
        </div>
        <!-- l-header__right-wrapper -->
    </div>
    <!-- l-header__container -->
</header>
<!-- l-header -->

<!-- スマホスタイル -->

<div class="l-sp" id="l-sp">
    <div class="l-sp__wrapper">
        <h1 class="l-sp__logo">
            <a href="<?php echo home_url(); ?>" class="l-sp__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Engress-logo.svg" alt="logo" class="sp-logo-img">
            </a>
        </h1>
        <div class="l-sp-menu__btn-wrapper">
            <button class="c-sp-menu-btn" id="sp_menu_btn" aria-label="hamburger">
                <span class="c-sp-menu-btn__border"></span>
                <span class="c-sp-menu-btn__border"></span>
                <span class="c-sp-menu-btn__border"></span>
            </button>
            <!-- l-sp-menu-btn -->
        </div>
        <!-- l-sp-menu__btn-wrapper -->
    </div>
    <!-- l-sp-header__wrapper -->

    <div class="l-sp-nav" id="l-sp-nav">
        <div class="l-sp-nav__box">
            <nav class="l-sp-nav__nav">
                <ul class="l-sp-nav__list">
                    <li class="l-sp-nav__item"><a href="<?php echo home_url(); ?>" class="l-sp-nav__link">ホーム</a></li>
                    <li class="l-sp-nav__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-sp-nav__link">お知らせ</a></li>
                    <li class="l-sp-nav__item"><a href="<?php echo esc_url(home_url('blog')); ?>" class="l-sp-nav__link">ブログ</a></li>
                    <li class="l-sp-nav__item"><a href="<?php echo esc_url(home_url('price')); ?>" class="l-sp-nav__link">コース・料金</a></li>
                </ul>
            </nav>
            <!-- "l-sp-nav__nav -->
            <div class="l-sp-nav__wrapper">
                <div class="l-sp-nav__tel-wrapper">
                    <p class="c-tel">
                        <span class="c-tel-time">平日08:00~20:00</span>
                        <a href="tel:0123-456-7890" class="c-tel-number">0123-456-7890</a>
                    </p>
                </div>
                <div class="l-sp-nav__btn-wrapper">
                    <a href="<?php echo esc_url(home_url('price')); ?>" class="l-sp-nav__btn-link">
                        <div class="l-sp-nav__btn c-btn-orange">
                            資料請求
                        </div>
                    </a>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" class="l-sp-nav__btn-link">
                        <div class="l-sp-nav__btn c-btn-white">
                            お問い合わせ
                        </div>
                    </a>
                </div>
                <!-- l-sp-nav__btn-wrapper -->
            </div>
            <!-- l-sp-nav__-wrapper -->
        </div>
        <!-- l-sp-nav__box -->
    </div>
    <!-- l-sp-nav -->
</div>
<!-- l-sp -->

<?php if ( !is_front_page() && !is_singular('blog') && !is_single()): ?>
<!-- その他のページ（通常のページ） -->
<div class="page-fv__inner">
    <figure class="page-fv__img-wrapper">
        <?php
        // アイキャッチ画像を取得（カスタムサイズ 'detail' を使用）
        if (has_post_thumbnail()) {
            // アイキャッチ画像がある場合
            the_post_thumbnail('detail', ['class' => 'page-fv__img']); // 'detail' サイズを使用し、クラスを付与
        } else {
            // アイキャッチ画像がない場合のデフォルト画像
            echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/blog.png') . '" alt="デフォルト画像" class="page-fv__img">';
        }
        ?>
    </figure>
    <div class="fv__content">
        <h2 class="fv__title"><?php the_title(); ?></h2>
    </div>
</div>
    <!-- news 固定ページ または blog 固定ページ用ナビゲーション -->
    <div class="navigation-bg navigation-bg--height">
        <div class="navigation-wapper">
            <?php
            if (function_exists('bcn_display')): 
                bcn_display();
            endif; ?>
        </div>
    </div>
    
    <?php elseif (is_singular('news') || is_singular('blog')): ?>
    <!-- news 固定ページ または blog 固定ページ用ナビゲーション -->
    <div class="single-navigation__wapper">
        <div class="navigation-bg navigation-bg--height">
            <div class="navigation-wapper">
                <?php
                if (function_exists('bcn_display')):
                    bcn_display();
                endif; ?>
            </div>
        </div>
        <!-- navigation-bg navigation-bg--height -->
    </div>
    <!-- single-navigation__wapper -->
<?php endif; ?>
