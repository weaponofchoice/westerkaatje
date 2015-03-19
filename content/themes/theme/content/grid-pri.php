<?php
// Variables
$header_title = get_sub_field( 'grid_pri_header_title' );
$header_text = get_sub_field( 'grid_pri_header_text' );

$images = get_sub_field( 'grid_pri_images' );

// Output
echo '<section class="section section-grid section-grid-pri">';
  
  // Grid header
  if( $header_title || $header_text ): 
    echo '<div class="section-header">';
      echo '<h2>' . $header_title . '</h2>';
      echo $header_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( $images ):
    echo '<div class="section-content">';
      
      // If isotope is what you seek, remove block-grid classes and add 'isotope' class
      echo '<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-4">';
        foreach( $images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>