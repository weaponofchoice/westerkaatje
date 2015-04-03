<?php
// Options
$text_pos = get_sub_field( 'gridSec_o_h_pos' );
$text_align = get_sub_field( 'gridSec_o_h_align' );
$layout = get_sub_field( 'gridSec_o_c_layout' );

// Variables
$header_title = get_sub_field( 'gridSec_h_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns is_aligned-' . $text_align . '">', get_sub_field( 'gridSec_h_text' ) );
$content_items = get_sub_field( 'gridSec_c_item' );

// Output
echo '<section class="section section_grid section_grid-sec">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section_header row is_positioned-' . $text_pos . '">';
      echo '<h2 class="s-4 columns is_aligned-' . $text_align . '">' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( have_rows('gridSec_c_item') ):
    echo '<div class="section_content">';
      
    if( $layout == 'masonry' ){
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4 isotope isotope_masonry">';
    } else {
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
    }
        
        while( have_rows('gridSec_c_item') ): the_row();
          $image = get_sub_field( 'gridSec_c_item_image' );
          $title = get_sub_field( 'gridSec_c_item_title' );
          $text = preg_replace( '/<p>/', '<p class="is-aligned-' . $text_align . '">', get_sub_field( 'gridSec_c_item_text' ) );
          
          echo '<li>';
            echo '<img src="' . $image['sizes']['medium'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">';
            echo '<h2 class="is-aligned-' . $text_align . '">' . $title . '</h2>';
            echo $text;
          echo '</li>';
        endwhile;
        
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>