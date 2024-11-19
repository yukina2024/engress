<?php
get_header();
/* template name: blog-list */
?>
<section class="blog-list l-section">
<h2 class="blog-list__title c-sub-ttl">新着一覧</h2>
<div class="blog-list__wrapper">
<?php

        // スタッフの投稿タイプを取得するためのクエリ
        $args = array(
            'post_type' => 'blog',  // カスタム投稿タイプ名
            'posts_per_page' => -1,  // すべてのスタッフを取得
        );
        $blog_query = new WP_Query($args);

if ($blog_query->have_posts()) :


    while ($blog_query->have_posts()) : $blog_query->the_post();

        get_template_part('content', 'blog-list');

    endwhile;

    wp_reset_postdata();

endif; ?>



<a href="" class="p-media__link">
    <article class="blog-list__item p-media__item">
    <figure class="p-media__img-wrapper p-media__img-wrapper--page">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.png" alt="ブログ1" class="p-media__img p-media__img--page">
                    </figure>
                    <div class="p-media__content">
                    <time class="p-media__date p-media__date--page">2020-12-27</time>
                        <h3 class="p-media__ttl p-media__ttl--page"><span class="p-media__ttl-line">Engress説明会in大阪の模様をお伝えします</span></h3>
                        <p class="p-media__txt c-gloval__txt">先日、Engress説明会を大阪で開催しました。参加してくださった皆様、ありがとうございました！</p>
                    </div>
    </article>
    <!-- blog-list__item p-media__item -->
</a>
</section>
<!-- blog-list -->

<?php
get_footer();
?>