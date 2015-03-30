<?php
// Options
$text_pos = get_sub_field( 'gridPri_o_h_pos' );
$text_align = get_sub_field( 'gridPri_o_h_align' );
$layout = get_sub_field( 'gridPri_o_c_layout' );

// Variables
$header_title = get_sub_field( 'gridPri_h_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns is_aligned-' . $text_align . '">', get_sub_field( 'slider_h_text' ) );
$content_images = get_sub_field( 'gridPri_c_images' );

// Output
echo '<section class="section section_grid section_grid-pri">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section_header row">';
      echo '<h2 class="s-4 columns is_aligned-' . $text_align . '">' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( $content_images ):
    echo '<div class="section_content row">';
      
    if( $layout == 'masonry' ){
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4 isotope isotope_masonry">';
    } else {
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
    }
        foreach( $content_images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>