<?php
$parallax_id = "parallax-" . $i;
$image = get_sub_field( 'parallax_image' );

if(! $detect->isMobile() ):
?>

<section id="<?php echo $parallax_id; ?>" class="section section_parallax pad-no-sides is-fullwidth">
  <div class="section_content">
    <div class="bcg"
      style="background-image: url('<?php echo $image['sizes']['large']; ?>')"
      data-center="background-position: 50% 0px;"
      data-bottom-top="background-position: 50% 50px;"
      data-top-bottom="background-position: 50% -50px;"
      data-anchor-target="#<?php echo $parallax_id; ?>">
    </div>
  </div>
</section>

<?php else: ?>

<section id="<?php echo $parallax_id; ?>" class="section section_parallax pad-no is-fullwidth">
  <div class="section_content">
    <img src="<?php echo $image['sizes']['large']; ?>">
  </div>
</section>

<?php endif; ?>