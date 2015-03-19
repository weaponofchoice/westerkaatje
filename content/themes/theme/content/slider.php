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
      
      // The images
      echo '<ul class="slider-images">';
        foreach( $content_images as $image ):
          echo '<li><img src="' . $image['sizes']['medium'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
      // The bullets
      echo '<ul class="slider-bullets">';
        foreach( $content_images as $image ):
          echo '<li><i></i></li>';
        endforeach;
      echo '</ul>';
    
      // The controls
      if(! $detect->isMobile() ):
        echo '<div class="slider-controls">';
          echo '<button class="slider-prev arrow arrow-left"><i></i></button>';
          echo '<button class="slider-next arrow arrow-right"><i></i></button>';
        echo '</div>';
      endif;
      
    echo '</div>';
  endif;
  
echo '</section>';
?>