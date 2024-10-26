<?php if (is_front_page()): ?>
    <header class="l-header">
        <div class="l-header__wapper">
            <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>" class="l-header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-tetote.svg" alt="logo" class="l-header__logo-white" id="logo-white">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/bk-logo.svg" alt="logo" class="l-header__logo-black" id="logo-black">
                </a>
            </h1>
            <div class="l-header__btn-wapper">
                <div class="l-header__btn-box">
                    <a href="<?php echo esc_url(home_url('details')); ?>" class="c-btn-small">募集要項</a>
                </div>
                <div class="l-header__btn-box">
                    <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-btn-small --colored">ENTRY</a>
                </div>
                <div class="l-header__hamburger-wrapper">
                    <button class="l-header__hamburger c-hamburger-btn" id="js-ham" aria-label="メニューを開く">
                        <div class="l-header__hamburger-icon">
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                        </div>
                        <span class="l-header__hamburger-text c-hamburger-text">menu</span>
                    </button>
                </div>
            </div>
            <!-- l-header__btn-wapper -->
        </div>
        <!-- l-header__wapper -->
    </header>
    <!-- l-header -->
<?php else:
    //ここから下層ページのヘッダー
?>
    <header class="l-header l-header--bg-white">
        <div class="l-header__wapper">
            <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>" class="l-header__logo-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/bk-logo.svg" alt="logo" class="l-header__logo-black--page" id="logo-black">
                </a>
            </h1>
            <div class="l-header__btn-wapper">
                <div class="l-header__btn-box">
                    <a href="<?php echo esc_url(home_url('details')); ?>" class="c-btn-small">募集要項</a>
                </div>
                <div class="l-header__btn-box">
                    <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-btn-small --colored">ENTRY</a>
                </div>
                <div class="l-header__hamburger-wrapper">
                    <button class="l-header__hamburger c-hamburger-btn c-hamburger-btn--black"
                        id="js-ham"
                        aria-label="メニューを開く">
                        <div class="l-header__hamburger-icon">
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                            <span class="l-header__hamburger-bar c-hamburger-bar"></span>
                        </div>
                        <span class="l-header__hamburger-text c-hamburger-text">menu</span>
                    </button>
                </div>
            </div>
            <!-- l-header__btn-wapper -->
        </div>
        <!-- l-header__wapper -->
    </header>
    <!-- l-header -->
<?php endif; ?>






<?php if (is_front_page()): ?>

    <div class="swiper js-fv-slide">
        <div class="swiper-wrapper js-fv__slide-wapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv01.png" class="swiper-slide js-fv__slide-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv02.png" class="swiper-slide js-fv__slide-item">
        </div>
        <!-- swiper-wrapper js-fv__slide-wapper -->
    </div>
    <!-- swiper js-fv-slide -->
    <div class="l-fv-container">
        <!-- js-fv__slide-wapper -->
        <h2 class="fv-heading">BECOME A<wbr>
            CHALLENGER.</h2>
        <p class="fv-heading--sub">君の挑戦が、意思が、未来を変える</p>
        <div class="fv-heading__news">
            <p class="fv-heading__news-ttl">NEWS</p>
            <?php
            // ランダムなニュース記事を取得
            $args = array(
                'post_type' => 'blog',      // 投稿タイプが 'post' の場合（通常の投稿）
                'posts_per_page' => 1,      // 1件だけランダムで取得
                'orderby' => 'rand'         // ランダム順に取得
            );
            $random_news_query = new WP_Query($args);

            // 記事があるかチェック
            if ($random_news_query->have_posts()) :
                while ($random_news_query->have_posts()) : $random_news_query->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="fv-heading__news-link">
                        <span class="fv-heading__news-txt"><?php the_title(); ?></span>
                        <span class="fv-heading__news-btn">VIEW MORE</span>
                    </a>
            <?php
                endwhile;
            endif;

            // クエリのリセット
            wp_reset_postdata();
            ?>
        </div>
        <!-- fv-heading__news -->
    </div>
    <!-- l-fv-container -->


    <!-- single-staff.php 用の個別ヘッダー -->
<?php elseif (is_singular('staff')): ?>
    <?php
    // ACFやカスタムフィールドからスタッフ情報を取得
    $staff_img_id = get_field('staff-img'); // 画像フィールド
    $main_copy = get_field('main-copy');   // メインキャッチコピー
    $sub_copy = get_field('sub-copy');     // サブキャッチコピー
    $job_category = get_field('job-category'); // 職種
    $entering_date = get_field('entering-company-date'); // 入社日
    $staff_comment = get_field('comment'); // コメントや他のカスタムフィールド
    $staff_name = get_the_title(); // スタッフの名前（投稿のタイトル）
    $staff_permalink = get_permalink(); // 詳細ページのリンク

    ?>
    <section class="staff-header">
        <div class="staff-header__content l-section">
            <div class="staff-heading">
                <h2 class="staff-heading__ttl"><span class="bg"><?php echo esc_html($main_copy); ?></span></h2>
                <p class="staff-heading__sub-ttl"><span class="bg"><?php echo esc_html($sub_copy); ?></span></p> <!-- ACFを使って職位を表示 -->
                <p class="staff-heading__category"><?php echo esc_html($job_category); ?></p>
                <p class="staff-heading__name">
                    <?php echo esc_html($staff_name); ?>
                    <span class="staff-heading__joining">
                        <?php echo esc_html($entering_date); ?>年入社
                    </span>
                </p>
                <p class="staff-heading__txt">
                    <?php echo esc_html($staff_comment); ?>
                </p>
            </div>
            <figuer class="staff-header__img-wapper">
                <?php if ($staff_img_id): ?>
                    <img src="<?php echo esc_url(wp_get_attachment_image_url($staff_img_id, 'full')); ?>" alt="スタッフ画像" class="staff-header__img">
                <?php endif; ?>
            </figuer>
        </div>
        <!-- staff-header__content l-section -->
    </section>
    <!-- staff-header -->
    <div class="navigation-bg">
        <div class="navigation-wapper">
        <?php
            if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
    </div>


    <!-- ナビゲーションのみを表示する分岐 -->
<?php elseif (is_page('entry') || is_single('')): ?>
    <div class="navigation-bg navigation-bg--heght">
        <div class="navigation-wapper">
            <?php
            if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
    </div>





    <!-- その他のページ（通常のページ） -->
<?php else: ?>
    <?php
    // ACFやカスタムフィールドからスタッフ情報を取得
    $main_img_id = get_field('main_img'); // 画像フィールド
    $page_ttl = get_field('page_ttl');   // ページタイトル
    $heading_ttl = get_field('heading_ttl');     // キャッチコピー
    $heading_txt = get_field('heading_txt');     // サブキャッチコピー
    ?>
    <div class="about-fv-wapper page-fv-wapper">
        <?php if (has_post_thumbnail()): ?>
            <!-- アイキャッチ画像がある場合 -->
            <?php the_post_thumbnail('full', array('class' => 'page-fv-img')); ?>
        <?php else: ?>
            <!-- アイキャッチ画像がない場合、デフォルト画像を表示 -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-fv.png" alt="広いオフィス" class="page-fv-img">
        <?php endif; ?>
        <div class="page-heading-position">
            <h2 class="page-heading c-heading"><span class="bg"><?php echo esc_html($page_ttl); ?></span></h2>
            <p class="page-heading-ttl c-heading-ttl"><span class="bg"><?php echo esc_html($heading_ttl); ?></span></p>
            <p class="page-heading-txt c-heading-txt"><span class="bg"><?php echo esc_html($heading_txt); ?></span></p>
        </div>
    </div>
    <div class="navigation-bg">
        <div class="navigation-wapper">
            <?php
            if (function_exists('bcn_display')):
                bcn_display();
            endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part('content-gloval'); ?>

