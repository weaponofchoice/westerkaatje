<?php
$images = get_sub_field( 'grid_images' );

if( $images ):
  echo '<section class="section section-grid pad-no pad-extra-bottom">';
  
    echo '<ul>';
      foreach( $images as $image ):
        echo '<li><img src="' . $image['sizes']['large'] . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
      endforeach;
    echo '</ul>';
    
  echo '</section>';
endif;
?>