<?php
/* template name: front-page*/
get_header();
?>

<section class="fv-container">
    <figure class="fv-img-wapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv.png" alt="メインビジュアル" class="fv-img">
    </figure>
    <div class="fv-content">
        <h2 class="fv-title">TOEFL対策はEngress</h2>
        <p class="fv-text">日本人へのTOEFL指導歴豊かな講師陣の<br>
            コーチング型TOEFLスクール
        </p>
        <a href="<?php echo esc_url(home_url('price')); ?>" class="c-global__btn-link fv-link">
            <div class="c-global__btn c-btn-orange">
                資料請求
            </div>
        </a>
        <div class="c-global__cotact-link-wapper">
            <a href="<?php echo esc_url(home_url('price')); ?>" class="c-global__contact-link">お問い合わせ</a>
        </div>
    </div>
    <!-- l-fv-content -->
</section>
<!-- l-fv-container -->

<section class="introduction-container">
    <div class="introduction-content l-section">
        <h2 class="introduction-title">TOEFL学習でこんな悩みありませんか？</h2>
        <div class="introduction-item">
            <p class="introduction-text">勉強の習慣が<br>
            身についていない</p>
            <p class="introduction-text">勉強しているはず<br>
            なのに点数が伸びない</p>
            <p class="introduction-text">正しい勉強方法が<br>
            わからない</p>
        </div>
        <!-- introduction-item -->
         <article class="introduction-card">
            <h3 class="introduction-card__title">Engressは<br>
            <span class="u-ander-color">TOEFLに特化したスクール</span>です</h3>
            <p class="introduction-card__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
            TOEFLの苦手分野を克服します。</p>
         </article>
    </div>
    <!-- introduction-content -->
</section>

<?php
get_footer();
?>