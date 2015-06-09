<?php
// Content
$images = get_sub_field( 'grid_c_images' );
?>
<section class="section-grid">
  <div class="section-body">
    <ul class="m-grid-4">
      <?php
      foreach( $images as $image ):
        $image = $image['sizes']['large'];
        
        echo '<li><img src="' . $image . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';
        
      endforeach;
      ?>
    </ul>
  </div>
</section>