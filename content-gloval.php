<!-- ここからグローバルナビゲーションページ -->
<div class="gloval-nav-wapper" id="gloval-nav">

  <div class="gloval-nav__container">
    <div class="gloval-nav__logo-wapper">
      <h1 class="gloval-nav__logo"><a href="<?php echo home_url(); ?>" class="gloval-nav__logo-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/bk-logo.svg" alt="logo" class="logo-img" id="logo-black"></a>
      </h1>
    </div>
    <div class="gloval-nav__box">
      <nav class="gloval-nav gloval-nav__nav">
        <ul class="gloval-nav__list">
          <li class="gloval-nav__item">
            <a href="<?php echo esc_url(home_url('aboutus')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              ABOUT US <span class="c-gloval-ja">TETOTEについて</span>
            </a>
          </li>
          <li class="gloval-nav__item">
            <a href="<?php echo esc_url(home_url('staff-list')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              STAFF<span class="c-gloval-ja">社員について</span>
            </a>
          </li>
          <li class="gloval-nav__item">
            <a href="<?php echo esc_url(home_url('blog-list')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              BLOG<span class="c-gloval-ja">採用ブログ</span>
            </a>
          </li>
        </ul>
        <ul class="gloval-nav__list">
          <li class="gloval-nav__item">
            <a href="<?php echo esc_url(home_url('benefits')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              BENEFITS<span class="c-gloval-ja">福利厚生について</span>
            </a>
          </li>
          <li class="gloval-nav__item">
            <a href="<?php echo esc_url(home_url('carrer')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              CARRER<span class="c-gloval-ja">研修制度とキャリアパス</span>
            </a>
          </li>
          <li class="gloval-nav__item --boder">
            <a href="<?php echo esc_url(home_url('faq')); ?>" class="gloval-nav__item-link c-gloval-ttl">
              FAQ<span class="c-gloval-ja">よくある質問</span>
            </a>
          </li>
        </ul>
        <!-- gloval-nav__list -->
      </nav>
      <!-- gloval-nav__nav -->
      <div class="gloval-nav__btn-wapper">
        <div class="gloval-nav__btn-box">
          <a href="<?php echo esc_url(home_url('details')); ?>" class="c-btn-small">募集要項</a>
        </div>
        <!-- l-header__btn-box -->
        <div class="gloval-nav__btn-box">
          <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-btn-small --colored">ENTRY</a>
        </div>
      </div>
      <!-- l-header__btn-wapper -->
    </div>
    <!-- gloval-nav__box -->
  </div>
  <!-- gloval-nav__container -->
</div>
<!-- gloval-nav-wapper -->