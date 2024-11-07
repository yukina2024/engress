<header class="l-header">
    <div class="l-header__container">
        <div class="l-header__wapper">
            <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>" class="l-header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Engress-logo.svg" alt="logo" class="logo-img" id="header-logo">
                </a>
            </h1>
            <nav class="l-header__nav">
                <ul class="l-header__list">
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">ホーム</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">お知らせ</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">ブログ</a></li>
                    <li class="l-header__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__link">コース・料金</a></li>
                </ul>
            </nav>
        </div>
        <!-- l-header__left-wapper -->
        <div class="l-header__right-wapper">
            <div class="l-header__tel-wapper c-tel">
                <p class="c-tel__time">平日08:00~20:00</p>
                <p class="c-tel__number"><a href="tel:0123-456-7890" class="c-tel__number-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/juwaki.png" alt="電話ロゴ">
                        0123-456-7890</a></p>
            </div>
            <div class="l-header__btn-wapper">
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
            <!-- l-header__btn-wapper -->
        </div>
        <!-- l-header__right-wapper -->
    </div>
    <!-- l-header__container -->
</header>
<!-- l-header -->

<!-- スマホスタイル -->

<div class="l-sp" id="l-sp">
    <div class="l-sp__wapper">
        <h1 class="l-sp__logo">
            <a href="<?php echo home_url(); ?>" class="l-sp__logo-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Engress-logo.svg" alt="logo" class="sp-logo-img">
            </a>
        </h1>
        <div class="l-sp-menu__btn-wapper">
            <button class="c-sp-menu-btn" id="sp_menu_btn" aria-label="hamburger">
                <span class="c-sp-menu-btn__border"></span>
                <span class="c-sp-menu-btn__border"></span>
                <span class="c-sp-menu-btn__border"></span>
            </button>
            <!-- l-sp-menu-btn -->
        </div>
        <!-- l-sp-menu__btn-wapper -->
    </div>
    <!-- l-sp-header__wapper -->

    <dialog class="l-sp-nav" id="l-sp-nav">
        <div class="l-sp-nav__box">
            <nav class="l-sp-nav__nav">
                <ul class="l-sp-nav__list">
                    <li class="l-sp-nav__item"><a href="#" class="l-sp-nav__link">ホーム</a></li>
                    <li class="l-sp-nav__item"><a href="#" class="l-sp-nav__link">お知らせ</a></li>
                    <li class="l-sp-nav__item"><a href="#" class="l-sp-nav__link">ブログ</a></li>
                    <li class="l-sp-nav__item"><a href="#" class="l-sp-nav__link">コース・料金</a></li>
                </ul>
            </nav>
            <!-- "l-sp-nav__nav -->
            <div class="l-sp-nav__wapper">
                <div class="l-sp-nav__tel-wapper">
                    <p class="c-tel">
                        <span class="c-tel-time">平日08:00~20:00</span>
                        <a href="tel:0123-456-7890" class="c-tel-number">0123-456-7890</a>
                    </p>
                </div>
                <div class="l-sp-nav__btn-wapper">
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
                <!-- l-sp-nav__btn-wapper -->
            </div>
            <!-- l-sp-nav__-wapper -->
        </div>
        <!-- l-sp-nav__box -->
    </dialog>
    <!-- l-sp-nav -->
</div>
<!-- l-sp -->