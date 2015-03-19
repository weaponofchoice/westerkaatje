<?php
// Variables
$header_title = get_sub_field( 'grid_pri_header_title' );
$header_text = get_sub_field( 'grid_pri_header_text' );

$images = get_sub_field( 'grid_pri_images' );

// Output
echo '<section class="section section-grid">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section-header">';
      echo '<h2>' . $content_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( $images ):
    echo '<section class="section section-grid pad-no pad-extra-bottom">';
  
    echo '<ul>';
      foreach( $images as $image ):
        echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
      endforeach;
    echo '</ul>';
    
  
endif;

echo '</section>';
?>