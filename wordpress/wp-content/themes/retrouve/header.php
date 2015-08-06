<!doctype html>
<html class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo IMG_DIR ?>/favicon.ico?cb=<?php echo CACHE_BUSTER ?>" rel="shortcut icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <script src="<?php echo JS_DIR ?>/main.js?cb=<?php echo CACHE_BUSTER ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_DIR ?>/main.css?cb=<?php echo CACHE_BUSTER ?>">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!-- nav -->
    <nav class="nav" role="navigation">
      <?php 
        wp_nav_menu(array(
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => 'nav',
        ));
      ?>
    </nav>
    <!-- /nav -->

