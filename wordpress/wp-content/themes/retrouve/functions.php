<?php

if ( !defined('DS') ) define( "DS", DIRECTORY_SEPARATOR );

define( "CACHE_BUSTER", "0001" );

/**
 * Define directory constants
 */
define( 'CSS_DIR', get_template_directory_uri().'/assets/build/css' );
define( 'JS_DIR', get_template_directory_uri().'/assets/build/js' );
define( 'IMG_DIR', get_template_directory_uri().'/assets/build/img' );

include 'app/bootstrap.php';

