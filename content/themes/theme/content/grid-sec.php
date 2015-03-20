<?php
// Variables
$header_title = get_sub_field( 'grid_sec_header_title' );
$header_text = get_sub_field( 'grid_sec_header_text' );

$content_items = get_sub_field( 'grid_sec_item' );

// Output
echo '<section class="section section-grid section-grid-sec">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section-header s-4 columns">';
      echo '<h2>' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( have_rows('grid_sec_item') ):
    echo '<div class="section-content">';
      
      // If isotope is what you seek, just add the 'isotope' class
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
        
        while( have_rows('grid_sec_item') ): the_row();
          $image = get_sub_field( 'grid_sec_item_image' );
          $title = get_sub_field( 'grid_sec_item_title' );
          $text = get_sub_field( 'grid_sec_item_text' );
          
          echo '<li>';
            echo '<img src="' . $image['sizes']['medium'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '">';
            echo '<h2>' . $title . '</h2>';
            echo $text;
          echo '</li>';
        endwhile;
        
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>