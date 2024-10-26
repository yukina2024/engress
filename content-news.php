<?php
// ACFやカスタムフィールドからスタッフ情報を取得
$staff_img_id = get_field('staff-img'); // 画像フィールド
$main_copy = get_field('main-copy');   // メインキャッチコピー
$sub_copy = get_field('sub-copy');     // サブキャッチコピー
$job_category = get_field('job-category'); // 職種
$entering_date = get_field('entering-company-date'); // 入社日
$staff_name = get_the_title(); // スタッフの名前（投稿のタイトル）
$staff_permalink = get_permalink(); // 詳細ページのリンク
?>

<a href="<?php echo esc_url($staff_permalink); ?>" class="staff-link">
    <div class="staff-iteme">

        <figure class="p-media__img-item">
            <!-- 画像がある場合に表示 -->
            <?php if ($staff_img_id): ?>
                <img src="<?php echo esc_url(wp_get_attachment_image_url($staff_img_id, 'full')); ?>" alt="スタッフ画像">
            <?php endif; ?>

            <figcaption class="p-media__img-ttl">
                <span class="c-media__ttl"><?php echo esc_html($main_copy); ?></span>
                <span class="c-media__ttl"><?php echo esc_html($sub_copy); ?></span>
            </figcaption>
            <!-- c-card__img-ttl -->
        </figure>
        <!-- c-card__img-item -->

        <div class="p-media__profil-wapper">
            <span class="p-media__profil-label"><?php echo esc_html($job_category); ?></span>
            <span class="p-media__profil-label"><?php echo esc_html($entering_date); ?>年入社</span>
            <p class="p-media__profil-text"><?php echo esc_html($staff_name); ?></p>
        </div>
        <!-- p-media__profil-wapper -->

    </div>
    <!-- staff-item -->
</a>
<!-- staff-link -->