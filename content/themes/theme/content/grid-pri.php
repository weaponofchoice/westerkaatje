<?php
// Variables
$header_title = get_sub_field( 'grid_pri_header_title' );
$header_text = preg_replace( '/<p>/', '<p class="s-4 columns">', get_sub_field( 'grid_pri_header_text' ) );

$images = get_sub_field( 'grid_pri_images' );
$layout = get_sub_field( 'grid_pri_layout' );

// Output
echo '<section class="section section_grid section_grid-pri">';
  
  // Grid header
  if( $header_title || $header_text ): 
    include( 'section_header.php' );
  endif;
  
  // Grid content
  if( $images ):
    echo '<div class="section_content row">';
      
    if( $layout == 'masonry' ){
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4 isotope isotope_masonry">';
    } else {
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
    }
        foreach( $images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>