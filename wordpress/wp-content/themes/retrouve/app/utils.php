<?php

// Fixes the guid stored by WP on local envs, and replaces it always with the current env domain
function fix_guid_domain( $guid ){

  if ( empty( trim($guid) ) ){
    return $guid;
  }

  $chunks = parse_url( $guid );

  $new_guid = WP_SITEURL . $chunks['path'];

  if ( isset($chunks['query']) ){
    $new_guid .= '?' . $chunks['query'];
  }

  return $new_guid;
  
}



