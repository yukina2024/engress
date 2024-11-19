<?php
/* template name: front-page*/
get_header();
?>
    <section class="fv__inner">
    <figure class="fv__img-wrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv.png" alt="メインビジュアル" class="fv__img">
    </figure>
    <div class="fv__content">
        <h2 class="fv__title">TOEFL対策はEngress</h2>
        <p class="fv__text">日本人へのTOEFL指導歴豊かな講師陣の<br>
            コーチング型TOEFLスクール
        </p>
        <a href="<?php echo esc_url(home_url('price')); ?>" class="c-global__btn-link fv__link">
            <div class="c-global__btn c-btn-orange">
                資料請求
            </div>
        </a>
        <div class="c-global__cotact-link-wrapper">
            <a href="<?php echo esc_url(home_url('price')); ?>" class="c-global__contact-link">お問い合わせ</a>
        </div>
    </div>
    <!-- l-fv-content -->
</section>

<section class="introduction" id="introduction">
    <div class="introduction__inner">
        <h2 class="introduction__title">TOEFL学習でこんな悩みありませんか？</h2>
        <div class="introduction__item">
            <p class="introduction__text">勉強の習慣が<span class="desktop-only"><br></span>
                身についていない</p>
            <p class="introduction__text">勉強しているはず<span class="desktop-only"><br></span>
                なのに点数が伸びない</p>
            <p class="introduction__text">正しい勉強方法が<span class="desktop-only"><br></span>
                わからない</p>
        </div>
        <!-- introduction-item -->
        <article class="introduction__card">
            <div class="introduction__card-inner">
                <h3 class="introduction__card-title">Engressは<br>
                    <span class="u-ander-color">TOEFLに特化したスクール</span>です
                </h3>
                <p class="introduction__card-text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>
                    TOEFLの苦手分野を克服します。</p>
            </div>
        </article>
        <!-- introduction-card -->
    </div>
    <!-- introduction__inner-->
</section>
<!-- introduction -->


<section class="curriculum" id="curriculum">
    <h2 class="curriculum__heading c-main-ttl">TOEFL対策に特化したEngress3つの強み</h2>
    <div class="curriculum__inner">
        <article class="curriculum__wrapper">
            <div class="curriculum__item">
                <p class="curriculum__label">特徴 1</p>
                <h3 class="curriculum__title">TOEFLに最適化された<span class="desktop-only"><br></span>
                    無駄のないカリキュラム</h3>
                <p class="curriculum__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div>
            <!-- curriculum__wrapper -->
            <figure class="curriculum__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature01.png" alt="TOEFLに最適化された無駄のないカリキュラム" class="curriculum__img">
            </figure>
        </article>
        <!-- curriculum__wrapper -->
        <article class="curriculum__wrapper  curriculum__wrapper--reverse">
            <div class="curriculum__item">
                <p class="curriculum__label">特徴 2</p>
                <h3 class="curriculum__title">日本人指導歴10年以上の<span class="desktop-only"><br></span>
                    経験豊富な講師陣</h3>
                <p class="curriculum__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
            </div>
            <figure class="curriculum__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature02.png" alt="日本人指導歴10年以上の経験豊富な講師陣" class="curriculum__img">
            </figure>
        </article>
        <!-- curriculum__wrapper -->
        <article class="curriculum__wrapper">
            <div class="curriculum__item">
                <p class="curriculum__label">特徴 3</p>
                <h3 class="curriculum__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                <p class="curriculum__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
            </div>
            <figure class="curriculum__img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature03.png" alt="平均3ヶ月でTOEFL iBT20点アップ" class="curriculum__img">
            </figure>
        </article>
        <!-- curriculum__wrapper -->
    </div>
    <!-- curriculum__inner -->
    <div class="curriculum__price">
        <p class="curriculum__price-title">Engressの料金プランはこちら</p>
        <a href="" class="curriculum__price-link"><button class="curriculum__price-btn">料金を見てみる</button></a>
    </div>
</section>
<!-- curriculum -->

<section class="example" id="example">
    <h2 class="example__heading c-main-ttl">
        TOEFL成功事例
    </h2>
    <div class="example__inner">
        <article class="example__media">
            <p class="example__media-heading">
                TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！
            </p>
            <div class="example__media-item">
                <figure class="example__img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model01.png" alt="TOEFL成功事例1" class="example__img">
                </figure>
                <div class="example__content">
                    <p class="example__kind u-text-white">会社員</p>
                    <p class="example__name u-text-white">T.Fujiyamaさん</p>
                    <p class="example__score u-text-white">3ヶ月でTOEFL80→108点</p>
                </div>
            </div>
            <!-- example__media-item -->
        </article>
        <!-- example__media -->
        <article class="example__media">
            <p class="example__media-heading">
                半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格
            </p>
            <div class="example__media-item">
                <figure class="example__img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model02.png" alt="TOEFL成功事例2" class="example__img">
                </figure>
                <div class="example__content">
                    <p class="example__kind u-text-white">大学生</p>
                    <p class="example__name u-text-white">Y.Takiyamaさん</p>
                    <p class="example__score u-text-white">6ヶ月でTOEFL40→100点</p>
                </div>
            </div>
            <!-- example__media-item -->
        </article>
        <!-- example__media -->
        <article class="example__media">
            <p class="example__media-heading">
                早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点
            </p>
            <div class="example__media-item">
                <figure class="example__img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/model03.png" alt="TOEFL成功事例3" class="example__img">
                </figure>
                <div class="example__content">
                    <p class="example__kind u-text-white">高校生</p>
                    <p class="example__name u-text-white">M.Yamadaさん</p>
                    <p class="example__score u-text-white">5ヶ月でTOEFL68→109点</p>
                </div>
            </div>
        </article>
        <!-- example__media -->
    </div>
    <!-- example__inner -->
</section>
<!-- example -->

<section class="process l-section" id="process">
    <h2 class="process__heading c-main-ttl">ご利用の流れ</h2>
    <dl class="process__list">

        <div class="process__list-item">
            <dt class="process__list-number">1</dt>
            <dd class="process__list-content">
                <h3 class="process__list-ttl">お問い合わせ</h3>
                <p class="process__list-txt">まずはお問い合わせフォームまたはお電話よりお申し込みください。</p>
            </dd>
        </div>

        <div class="process__list-item">
            <dt class="process__list-number">2</dt>
            <dd class="process__list-content">
                <h3 class="process__list-ttl">ヒアリング</h3>
                <p class="process__list-txt">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
            </dd>
        </div>

        <div class="process__list-item">
            <dt class="process__list-number">3</dt>
            <dd class="process__list-content">
                <h3 class="process__list-ttl">学習プランのご提案</h3>
                <p class="process__list-txt">目標達成のために、最適な学習プランをご提案します。</p>
            </dd>
        </div>

        <div class="process__list-item">
            <dt class="process__list-number">4</dt>
            <dd class="process__list-content">
                <h3 class="process__list-ttl">ご入会</h3>
                <p class="process__list-txt">お申込み完了後、レッスンがスタートします。</p>
            </dd>
        </div>
    </dl>
    <!-- process__list -->
</section>
<!-- process -->

<section class="faq" id="faq">
    <h2 class="faq__heading c-main-ttl">よくある質問</h2>
    <div class="faq__inner">
        <div class="faq__content">
            <details class="faq__item js-details">
                <summary class="js-summary">
                    <ul class="faq__question">
                        <li class="faq__question-text">
                            Engressはサラリーマンでも学習を続けられるでしょうか？
                        </li>
                    </ul>
                </summary>
                <ul class="faq__answer">
                    <li class="faq__answer-text">
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </li>
                </ul>
            </details>
            <!-- faq__item -->
        </div>
        <!-- faq__content -->

        <div class="faq__content">
            <details class="faq__item js-details">
                <summary class="js-summary">
                    <ul class="faq__question">
                        <li class="faq__question-text">
                            Engressはサラリーマンでも学習を続けられるでしょうか？
                        </li>
                    </ul>
                </summary>
                <ul class="faq__answer">
                    <li class="faq__answer-text">
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </li>
                </ul>
            </details>
            <!-- faq__item -->
        </div>
        <!-- faq__content -->

        <div class="faq__content">
            <details class="faq__item js-details">
                <summary class="js-summary">
                    <ul class="faq__question">
                        <li class="faq__question-text">
                            Engressはサラリーマンでも学習を続けられるでしょうか？
                        </li>
                    </ul>
                </summary>
                <ul class="faq__answer">
                    <li class="faq__answer-text">
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </li>
                </ul>
            </details>
            <!-- faq__item -->
        </div>
        <!-- faq__content -->

        <div class="faq__content">
            <details class="faq__item js-details">
                <summary class="js-summary">
                    <ul class="faq__question">
                        <li class="faq__question-text">
                            Engressはサラリーマンでも学習を続けられるでしょうか？
                        </li>
                    </ul>
                </summary>
                <ul class="faq__answer">
                    <li class="faq__answer-text">
                        Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                    </li>
                </ul>
            </details>
            <!-- faq__item -->
        </div>
        <!-- faq__content -->
    </div>
    <!-- faq__inner -->
</section>
<!-- faq -->

<div class="info l-section" id="info">
    <section class="blog">
        <h2 class="blog__heading c-main-ttl">ブログ</h2>
        <div class="blog__inner">
            <a href="" class="p-media__link blog__link">
                <article class="p-media__item blog__item">
                    <figure class="p-media__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.png" alt="ブログ1" class="p-media__img">
                    </figure>
                    <div class="p-media__content">
                        <h3 class="p-media__ttl"><span class="p-media__ttl-line">Engress説明会in大阪の模様をお伝えします</span></h3>
                        <time class="p-media__date">2020-12-27</time>
                    </div>
                </article>
                <!-- blog__item -->
            </a>
            <!-- blog__link -->

            <a href="" class="p-media__link blog__link">
                <article class="p-media__item blog__item">
                    <figure class="p-media__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample02.png" alt="ブログ1" class="p-media__img">
                    </figure>
                    <div class="p-media__content">
                        <h3 class="p-media__ttl"><span class="p-media__ttl-line">Engressもくもく会でみんなで　TOEFL学習をしませんか？</span></h3>
                        <time class="p-media__date">2020-12-01</time>
                    </div>
                </article>
                <!-- blog__item -->
            </a>
            <!-- blog__link -->

            <a href="" class="p-media__link blog__link">
                <article class="p-media__item blog__item">
                    <figure class="p-media__img-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample03.png" alt="ブログ1" class="p-media__img">
                    </figure>
                    <div class="p-media__content">
                        <h3 class="p-media__ttl"><span class="p-media__ttl-line">TOEFL学習にはコーチング学習が最強である話</span></h3>
                        <time class="p-media__date">2020-11–20</time>
                    </div>
                </article>
                <!-- p-media__item blog__item -->
            </a>
            <!-- p-media__link blog__link -->
        </div>
        <!-- blog__inner -->
    </section>
    <!-- blog -->
    <section class="news">
        <h2 class="news__heading c-main-ttl">お知らせ</h2>
        <div class="news__inner">
            <a href="" class="news__link">
                <article class="news__item">
                    <time class="news__date">2020-12-01</time>
                    <p class="news__text">2021年のスケジュールについて</p>
                </article>
                <!-- news__item -->
            </a>
            <a href="" class="news__link">
                <article class="news__item">
                    <time class="news__date">2019-11-02</time>
                    <p class="news__text">11月休校日のお知らせ</p>
                </article>
                <!-- news__item -->
            </a>
            <a href="" class="news__link">
                <article class="news__item">
                    <time class="news__date">2020-10-01</time>
                    <p class="news__text">10月休校日のお知らせ</p>
                </article>
                <!-- news__item -->
            </a>
        </div>
        <!-- news__inner -->
    </section>
</div>
<!-- info -->
<?php
get_footer();
?>