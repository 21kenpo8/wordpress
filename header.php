<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- コメントのショートカット -->
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="ぽよぽよポートフォリオサイトです。">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="head-title"> <span>P</span>OYO POYO PORTFOLIO </div>

 <div class="header-contact">
 </div>
 <?php wp_nav_menu(); ?>
  </header>
