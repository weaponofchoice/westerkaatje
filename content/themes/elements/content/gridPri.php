<?php
// Options
$gridPri_o_menu = get_sub_field( 'gridPri_o_menu' );

$gridPri_o_h_pos = get_sub_field( 'gridPri_o_h_pos' );
$gridPri_o_h_align = get_sub_field( 'gridPri_o_h_align' );
$gridPri_o_c_layout = get_sub_field( 'gridPri_o_c_layout' );

// Content
$gridPri_h_title = get_sub_field( 'gridPri_h_title' );
$gridPri_h_text = preg_replace( '/<p>/', '<p class="s-4 columns is_aligned-' . $gridPri_o_h_align . '">', get_sub_field( 'gridPri_h_text' ) );
$gridPri_c_images = get_sub_field( 'gridPri_c_images' );

// Output
echo '<section class="section section_grid section_gridPri' . (( $gridPri_o_menu == true ) ? ' has_anchor" id="anchor-' . $i_anchor : "") . '">';
  
  // Grid header
  if( $gridPri_h_title || $gridPri_h_text ): 
    echo '<div class="section_header row is_positioned-' . $gridPri_o_h_pos . '">';
      echo '<h2 class="s-4 columns is_aligned-' . $gridPri_o_h_align . '">' . $gridPri_h_title . '</h2>';
      echo $gridPri_h_text;
    echo '</div>';
  endif;
  
  // Grid content
  if( $gridPri_c_images ):
    echo '<div class="section_content row">';
      
    if( $gridPri_o_c_layout == 'masonry' ){
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4 isotope isotope_masonry">';
    } else {
      echo '<ul class="s-grid-1 m-grid-2 l-grid-4">';
    }
        foreach( $gridPri_c_images as $image ):
          echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        endforeach;
      echo '</ul>';
      
    echo '</div>';
  endif;
  
echo '</section>';
?>