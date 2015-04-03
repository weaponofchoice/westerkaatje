<?php
$image_width = get_sub_field( 'image_o_c_width' );
$image_pos = get_sub_field( 'image_o_c_pos' );

$image = get_sub_field( 'image_c_image' );
$caption = get_sub_field( 'image_c_caption' );
?>
<section class="section section_image has_no-pad">
  <div class="section_content row <?php echo 'is_positioned-' . $image_pos; ?>">
    <figure>
      <img src="<?php echo $image['sizes']['large']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
      <figcaption>
        <p class="is_small is_italic"><?php echo $caption; ?></p>
      </figcaption>
    </figure>
  </div>
</section>