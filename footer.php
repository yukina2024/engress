<footer class="l-footer" id="footer">
    <div class="l-footer__contact">
        <div class="l-footer-contact-wapper">
            <p class="l-footer-text">まずは無料で資料請求から</p>
            <a href="<?php echo esc_url(home_url('price')); ?>" class="l-footer__btn-link">
                <div class="l-footer__btn c-btn-orange">
                    資料請求
                </div>
            </a>
            <div class="l-footer__cotact-link-wapper">
                <a href="<?php echo esc_url(home_url('price')); ?>" class="l-footer__contact-link">お問い合わせ</a>
            </div>
        </div>
    </div>
    <!-- l-footer-contact -->
    <div class="l-footer__tel">
        <p class="l-footer__tel-text">お電話でのお問い合わせはこちら</p>
        <p class="l-footer__tel-item">
            <a href="tel:0123-456-7890" class="l-footer__tel-link">0123-456-7890</a>
        </p>
        <p class="l-footer__tel-time">平日 08:00~20:00</p>
    </div>
    <!-- l-footer-tel -->
    <span class="l-footer__bg">
        <div class="l-footer__nav">
            <div class="l-footer__nav-item">
                <nav class="l-footer-nav">
                    <ul class="l-footer-nav__list">
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer-nav__link">ホーム</a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('news')); ?>" class="l-footer-nav__link">お知らせ</a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('blog')); ?>" class="l-footer-nav__link">ブログ</a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('price')); ?>" class="l-footer-nav__link">コース・料金</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- l-footer__nav-item -->
            <div class="l-footer__nav-item--logo">
                <div class="l-footer__logo">
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__logo-link">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Engress-logo.svg" alt="Engress">
                    </a>
                </div>
                <div class="l-footer__nav-tel c-tel">
                    <p class="c-tel__number"><a href="tel:0123-456-7890" class="c-tel__number-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/juwaki2.png" alt="電話ロゴ">
                            0123-456-7890</a></p>
                    <p class="c-tel__time">平日08:00~20:00</p>
                </div>
            </div>
        </div>
        <!-- l-footer-nav -->
    </span>
    <!-- l-footer__bg -->
    <div class="l-footer-copyright">
        <small>&copy; 2020 Engress.</small>
    </div>
    <!-- l-footer-copyright -->
</footer>
<!-- l-footer -->
<?php wp_footer(); ?>
</body>

</html>