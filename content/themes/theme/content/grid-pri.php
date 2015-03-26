<?php
// Variables
$header_title = get_sub_field( 'grid_pri_header_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns">', get_sub_field( 'grid_pri_header_text' ) );

$images = get_sub_field( 'grid_pri_images' );

// Output
echo '<section class="section section_grid section_grid-pri">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section_header row">';
      echo '<h2 class="s-4 columns">' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( $images ):
    echo '<div class="section_content row">';
      
      // If isotope is what you seek, just add the 'isotope' class
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
        foreach( $images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>