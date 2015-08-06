<?php

function pr( $txt ) {
  echo "<pre>";
  print_r( $txt );
  echo "</pre>";
}

function prd( $txt ) {
  pr( $txt );
  die();
}

function ucw( $string ){
  return ucwords(strtolower($string));
}

