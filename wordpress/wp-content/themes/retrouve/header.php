<!doctype html>
<html class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo IMG_DIR ?>/favicon.ico?cb=<?php echo CACHE_BUSTER ?>" rel="shortcut icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="stylesheet" type="text/css" href="<?php echo CSS_DIR ?>/main.css?cb=<?php echo CACHE_BUSTER ?>">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container-fluid">

      <div class="header">

        <a class="logo" href="/">
          <img src="<?php echo IMG_DIR ?>/retrouve-logo.png">
        </a>

        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
              <li><a href="#">Blog</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-center">
              <li><a href="#">Genesis</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Press</a></li>
              <li><a href="#">Retailers</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Follow</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </nav>

      </div><!--/.header -->


     <!--  <nav class="nav" role="navigation">
        <?php 
          wp_nav_menu(array(
            'theme_location' => 'header-center',
            'container' => false,
            'menu_class' => 'nav',
          ));
        ?>
      </nav> -->

