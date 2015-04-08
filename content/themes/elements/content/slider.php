<?php
// Options
$slider_menu = get_sub_field( 'slider_o_menu' );

$text_pos = get_sub_field( 'slider_o_h_pos' );
$text_align = get_sub_field( 'slider_o_h_align' );

// Content
$header_title = get_sub_field( 'slider_h_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns is_aligned-' . $text_align . '">', get_sub_field( 'slider_h_text' ) );
$content_images = get_sub_field( 'slider_c_images' );

// Output
echo '<section class="section section_slider"' . (( $slider_menu == true ) ? 'id="anchor-' . $i_anchor : "") . '">';
  
  // Gallery header
  if( $header_title || $header_text ): 
    echo '<div class="section_header row">';
      echo '<h2 class="s-4 columns is_aligned-' . $text_align . '">' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
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