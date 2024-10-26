<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <title><?php echo esc_html(wp_get_document_title()); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php get_template_part('inc-header'); ?>