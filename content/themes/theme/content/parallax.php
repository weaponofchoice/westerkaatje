<?php
$parallax_id = "parallax-" . $i;
$image = get_sub_field( 'parallax_image' );
?>

<section id="<?php echo $parallax_id; ?>" class="section parallax pad-no">
  <div class="section-content">
    <div class="bcg"
      style="background-image: url('<?php echo $image['sizes']['large']; ?>')"
      data-center="background-position: 50% 0px;"
      data-bottom-top="background-position: 50% 50px;"
      data-top-bottom="background-position: 50% -50px;"
      data-anchor-target="#<?php echo $parallax_id; ?>">
    </div>
  </div>
</section>