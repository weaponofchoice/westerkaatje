<?php
// Content
$id = preg_replace( '/\s+/', '',  strtolower(get_sub_field( 'grid_c_id' )) );
$images = get_sub_field( 'grid_c_images' );
?>
<section <?php if($id){ echo 'id="' . $id . '"'; } ?> class="section-grid row">
  <div class="section-body row">
    <ul class="m-grid-2 l-grid-4">
      <?php
      foreach( $images as $image ):
        $image = $image['sizes']['large'];

        echo '<li><img src="' . $image . '" width="' . $image['width'] . '" height="' . $image['height'] . '"></li>';

      endforeach;
      ?>
    </ul>
  </div>
</section>
