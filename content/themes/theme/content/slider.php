<?php
// Variables
$header_title = get_sub_field( 'slider_header_title' );
$header_text = get_sub_field( 'slider_header_text' );

$content_images = get_sub_field( 'slider_content_images' );

// Output
echo '<section class="section section-slider">';
  
  // Gallery header
  if( $header_title || $header_text ): 
    echo '<div class="section-header">';
      echo '<h2>' . $content_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Gallery content
  if( $content_images ):
    echo '<div class="section-content">';
      echo '<ul>';
        
        foreach( $content_images as $image ):
          echo '<li><img src="' . $image['sizes']['medium'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
        
      echo '</ul>';
    echo '</div>';
  endif;
  
echo '</section>';
?>