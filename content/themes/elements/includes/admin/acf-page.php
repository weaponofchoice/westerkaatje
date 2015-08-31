<?php
// Creates ACF options pages
if( function_exists('acf_add_options_page') ){

  acf_add_options_page( array(
    'page_title'  => 'Info',
    'menu_title'  => 'Info',
    'menu_slug'   => 'info',
    'redirect'    => false
  ));

  acf_add_options_page( array(
    'page_title'  => 'Social Media',
    'menu_title'  => 'Social Media',
    'menu_slug'   => 'social-media',
    'redirect'    => false
  ));
}
?>
