<?php
// Content
$id = preg_replace( '/\s+/', '',  strtolower(get_sub_field( 'blockImage_c_id' )) );
$images = get_sub_field( 'blockImage_c_images' );
$text = get_sub_field( 'blockImage_c_text' );

// Options
$textColor = get_sub_field( 'blockImage_o_textColor' );
?>
<section <?php if($id){ echo 'id="' . $id . '"'; } ?> class="section-block image slider slider-auto">
  <ul class="slider-images">
    <?php foreach($images as $image ): ?>
      <li style="background-image: url('<?php echo $image['sizes']['large']; ?>');"></li>
    <?php endforeach; ?>
  </ul>
  <p class="is-<?php echo $textColor; ?>"><?php echo $text; ?></p>
</section>
