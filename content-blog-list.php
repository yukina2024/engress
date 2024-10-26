<?php
// カスタムフィールドを取得
$blog_img = get_field('blog_img');  // カスタムフィールド 'blog_img'
$blog_category = get_field('blog_category');  // カスタムフィールド 'blog_category'
$blog_ttl = get_field('blog_ttl');  // カスタムフィールド 'blog_ttl'
$date = get_field('date');  // カスタムフィールド 'date'
?>

<article class="blog-list__media p-blog-media">
  <a href="<?php the_permalink(); ?>" class="p-blog-media__link">

    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('full', ['class' => 'p-blog-media__img']); // アイキャッチ画像を表示 
      ?>
    <?php else : ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog01.png" alt="笑顔で説明する女性" class="p-blog-media__img"> <!-- アイキャッチがない場合、デフォルトの画像を表示 -->
    <?php endif; ?>
    <div class="p-blog-media__body">
      <div class="p-blog-media__heading"><span class="p-blog-media__heading-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/categorry.svg" alt=""></span>社内研修</div>
      <h3 class="p-blog-media__post"><span class="p-blog-media__post-boder"><?php the_title(); ?></span></h3>
      <div class="p-blog-media__day-wapper"><time datetime="<?php echo esc_attr($date); ?>" class="p-blog-media__day"><?php echo esc_attr($date); ?></time></div>
    </div>
    <!-- p-blog-media__body -->
  </a>
  <!-- p-blog-media__link -->
</article>