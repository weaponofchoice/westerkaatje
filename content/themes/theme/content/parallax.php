<?php
$parallax_id = "parallax-" . $i;
$image = get_sub_field( 'parallax_c_image' );

if(! $detect->isMobile() ):
?>

<section class="section section_parallax has_no-padSides is-fullwidth" id="<?php echo $parallax_id; ?>">
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

<section class="section section_parallax pad-no is-fullwidth" id="<?php echo $parallax_id; ?>">
  <div class="section_content">
    <img src="<?php echo $image['sizes']['large']; ?>">
  </div>
</section>

<?php endif; ?>