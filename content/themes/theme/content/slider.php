<?php
// Variables
$header_title = get_sub_field( 'slider_header_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns">', get_sub_field( 'slider_header_text' ) );

$content_images = get_sub_field( 'slider_content_images' );

// Output
echo '<section class="section section_slider">';
  
  // Gallery header
  if( $header_title || $header_text ): 
    // echo '<div class="section_header row">';
//       echo '<h2 class="s-4 columns">' . $header_title . '</h2>';
//       echo $header_text;
//     echo '</div>';
    include( 'section_header.php' );
  endif;
  
  // Gallery content
  if( $content_images ):
    echo '<div class="section_content row">';
      
      // The images
      echo '<ul class="slider-images s-4 columns">';
        foreach( $content_images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
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
          echo '<a class="slider-prev arrow arrow-left" href="javascript:;"><i></i></a>';
          echo '<a class="slider-next arrow arrow-right" href="javascript:;"><i></i></a>';
        echo '</div>';
      endif;
      
    echo '</div>';
  endif;
  
echo '</section>';
?>