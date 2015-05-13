<?php
$image_c_image_o_c_width = get_sub_field( 'image_o_c_width' );
$image_c_image_o_c_pos = get_sub_field( 'image_o_c_pos' );

$image_c_image = get_sub_field( 'image_c_image' );
$image_c_caption = get_sub_field( 'image_c_caption' );
?>
<section class="section_image has_no-pad">
  <div class="section_body row <?php echo 'is_positioned-' . $image_c_image_o_c_pos; ?>">
    <figure>
      <img src="<?php echo $image_c_image['sizes']['large']; ?>" width="<?php echo $image_c_image['width']; ?>" height="<?php echo $image_c_image['height']; ?>">
      <figcaption>
        <p class="is_small is_italic"><?php echo $image_c_caption; ?></p>
      </figcaption>
    </figure>
  </div>
</section>