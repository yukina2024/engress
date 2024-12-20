<?php


// All-in-One WP Migrationで特定のファイルやフォルダを除外
function exclude_files_from_export($exclude_filters)
{
   // 既存の除外設定
   $exclude_filters[] = 'wp-content/themes/tetote/vs.code';

   // Gulp関連のファイルとディレクトリを除外
   $exclude_filters[] = 'wp-content/themes/tetote/gulpfile.js';
   $exclude_filters[] = 'wp-content/themes/tetote/node_modules';
   $exclude_filters[] = 'wp-content/themes/tetote/package.json';
   $exclude_filters[] = 'wp-content/themes/tetote/package-lock.json';

   // Gulpで生成される可能性のある一時ファイルやディレクトリ
   $exclude_filters[] = 'wp-content/themes/tetote/.gulp-cache';
   $exclude_filters[] = 'wp-content/themes/tetote/gulp-tasks';

   return $exclude_filters;
}

function dequeue_slick_files()
{
   // slickのCSSをデキュー（読み込みをキャンセル）
   wp_dequeue_style('slick-css');
   wp_dequeue_style('slick-theme-css');

   // slickのJSをデキュー
   wp_dequeue_script('slick-js');
}
add_action('wp_enqueue_scripts', 'dequeue_slick_files', 20);



// CSS と JS の読み込み
function my_enqueue_scripts_and_styles()
{
   $uri = get_template_directory_uri();
   // テーマ内のカスタムスタイルを読み込み
   wp_enqueue_style('my-styles', $uri . '/assets/css/style.css', array(), '1.0.0');
   // jQueryを読み込み（WordPressの組み込み版）
   wp_enqueue_script('jquery');
   // カスタムスクリプトを読み込み
   wp_enqueue_script('my-script', $uri . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts_and_styles');



//アイキャッチ画像が利用できるように
add_theme_support('post-thumbnails');

/*
// 画像にwidthとheightを自動で追加しない
add_filter('wp_get_attachment_image_attributes', 'remove_image_dimensions', 10, 1);

function remove_image_dimensions($attr)
{
   if (isset($attr['width'])) {
      unset($attr['width']);
   }
   if (isset($attr['height'])) {
      unset($attr['height']);
   }
   return $attr;
}
   */


//画像のサイズを指定


//TOPページメイン画像
add_image_size('top', 1440, 823, true);

//blogページのメイン画像
add_image_size('blog', 156, 180, true);

// スタッフ画像の300px幅用のカスタムサイズ
add_image_size('staff', 300, 379, true);

//各ページのメイン画像用のサイズ
add_image_size('detail', 1920, 221, true);




// カスタム投稿タイプの追加

function enable_custom_post_type_archive($args, $post_type) {
   if ('books' === $post_type) { // 投稿タイプスラッグ
       $args['has_archive'] = true; // アーカイブを有効化
   }
   return $args;
}
add_filter('register_post_type_args', 'enable_custom_post_type_archive', 10, 2);


// カスタムフィールド