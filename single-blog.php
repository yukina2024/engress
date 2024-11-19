<?php
/* template name: blog*/
get_header(); ?>


<div class="blog-detail l-section">
    <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <div class="post-preview">
                  <a href="
                  <?php the_permalink(); ?>
                  //ページリンク
                  ">
                    <h2 class="post-title">
                      <?php the_title(); ?>
                    </h2>
                    <h3 class="post-subtitle">
                      <?php the_excerpt(); ?>
                    </h3>
                  </a>
                  <p class="post-meta">
                    <?php the_time(('Y/m/d')); ?>
                  </p>
                </div>
                <hr>
                <?php endwhile ?>
                <!-- Pager -->
                <div class="clearfix">
                <?php
                $link = get_previous_posts_link('&rarr; 新しい記事へ');
                if ($link) {
                  $link = str_replace('<a', '<a class="btn btn-primary float-left"', $link);
                  echo $link;
                }
                ?>
                <?php
                $link = get_next_posts_link('古い記事へ &rarr;');
                if ($link) {
                  $link = str_replace('<a', '<a class="btn btn-primary float-right"', $link);
                  echo $link;
                }
                ?>
              </div>
          </div>
        <?php else: ?>
          <p>記事が見つかりませんでした</p>
              //投稿がなけば表示
        <?php endif; ?>
        </div>
</div>

<!-- blog-detail -->
<?php get_footer(); ?>