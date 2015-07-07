<?php
get_header();

// Loop into ACF groups
if( have_rows('page') ):
  while( have_rows('page') ): the_row();
    
    if( get_row_layout() == 'text' ):
      include( locate_template('content/text.php') );
    elseif( get_row_layout() == 'blockText' ):
      include( locate_template('content/blockText.php') );
    elseif( get_row_layout() == 'blockImage' ):
      include( locate_template('content/blockImage.php') );
    elseif( get_row_layout() == 'grid' ):
      include( locate_template('content/grid.php') );
    elseif( get_row_layout() == 'slider' ):
      include( locate_template('content/slider.php') );
    elseif( get_row_layout() == 'form' ):
      include( locate_template('content/form.php') );
    endif;
    
  endwhile;
endif;

get_footer();
?>