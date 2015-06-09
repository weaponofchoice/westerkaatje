<?php
// Content
$image = get_sub_field( 'blockImage_c_image' );
$text = get_sub_field( 'blockImage_c_text' );
?>
<section class="section-block image">
  <div class="section-body" style="background-image: url('<?php echo $image['sizes']['large']; ?>')">
    <p><?php echo $text; ?></p>
  </div>
</section>