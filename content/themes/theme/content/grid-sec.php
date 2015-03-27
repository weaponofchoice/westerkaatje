<?php
// Variables
$header_title = get_sub_field( 'grid_sec_header_title' );
$header_text = get_sub_field( 'grid_sec_header_text' );

$content_items = get_sub_field( 'grid_sec_item' );
$layout = get_sub_field( 'grid_sec_layout' );
$text_align = get_sub_field( 'grid_sec_textAlign' );

// Output
echo '<section class="section section_grid section_grid-sec">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section_header s-4 columns">';
      echo '<h2>' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( have_rows('grid_sec_item') ):
    echo '<div class="section_content">';
      
    if( $layout == 'masonry' ){
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4 isotope isotope_masonry">';
    } else {
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
    }
        
        while( have_rows('grid_sec_item') ): the_row();
          $image = get_sub_field( 'grid_sec_item_image' );
          $title = get_sub_field( 'grid_sec_item_title' );
          $text = preg_replace( '/<p>/', '<p class="is-aligned-' . $text_align . '">', get_sub_field( 'grid_sec_item_text' ) );
          
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