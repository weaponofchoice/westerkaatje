<?php
$images = get_sub_field( 'slider_images' );
?>
<section class="section-slider slider">
  <div class="section-body">
    <ul class="slider-images">
      <?php foreach( $images as $image ): ?>
        <li><img src="<?php echo $image['sizes']['large']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>"></li>
      <?php endforeach; ?>
    </ul>
    
    <ul class="slider-bullets">
      <?php foreach( $images as $image): ?>
        <li><i></i></li>
      <?php endforeach; ?>
    </ul>
    
    <div class="slider-controls">
      <a class="slider-prev arrow arrow-left"><i></i></a>
      <a class="slider-next arrow arrow-right"><i></i></a>
    </div>
  </div>
</section>