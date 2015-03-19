<?php
// Banner fields
$banner = get_sub_field( 'hero_banner' );
$banner_src = $banner['sizes']['large'];

// Content fields
$logo = get_sub_field( 'hero_logo' );
$logo_src = $logo['sizes']['medium'];
?>
<section class="section section-hero pad-no">
  <div class="section-hero-banner is-stretched-wrapper">
    <img class="is-stretched-object" src="<?php echo $banner_src; ?>">
  </div>
  
  <div class="section-hero-content">
    <img src="<?php echo $logo_src; ?>">
  </div>
</section>

<a href="javascript:;" class="arrow arrow-scroll"><img src="<?php echo bloginfo( 'template_directory' ); ?>/img/arrow.svg"></a>