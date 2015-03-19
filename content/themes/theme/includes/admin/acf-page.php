<?php
// Creating an extra admin page for header and footer information
if( function_exists('acf_add_options_page') ){
  
  acf_add_options_page( array(
    'page_title'  => 'Footer',
    'menu_title'  => 'Footer',
    'menu_slug'   => 'footer',
    'redirect'    => false
  ));
}
?>