<?php
get_header();

if( have_posts() ):
  while( have_posts() ): the_post();
    
    // Loop into ACF groups
    if( have_rows('page') ): $i = 1;
      while( have_rows('page') ): the_row();
        
        // Hero section is placed before main
        
        if( get_row_layout() == 'text' ):
          include( locate_template('content/text.php') );
        elseif( get_row_layout() == 'grid_primary' ):
          include( locate_template('content/grid-pri.php') );
        elseif( get_row_layout() == 'grid_secondary' ):
          include( locate_template('content/grid-sec.php') );
        elseif( get_row_layout() == 'slider' ):
          include( locate_template('content/slider.php') );
        elseif( get_row_layout() == 'parallax' ):
          include( locate_template('content/parallax.php') );
        endif;
        
        $i++; endwhile;
    endif;
        
  endwhile;
endif;

get_footer();
?>