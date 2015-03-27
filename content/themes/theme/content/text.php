<?php
$text_pos = get_sub_field( 'text_pos' );
$text_align = get_sub_field( 'text_align' );

$title = get_sub_field( 'text_title' );
$content = preg_replace( '/<p>/', '<p class="is-aligned-' . $text_align . '">', get_sub_field( 'text_content' ) );
?>
<section class="section section_text">
  <div class="section_content row <?php echo 'is-positioned-' . $text_pos; ?>">
    <h2 class="s-4 columns is-uppercase is-bold <?php echo 'is-aligned-' . $text_align; ?>">
      <?php echo $title; ?>
    </h2>
    <div class="s-4 columns">
      <?php echo $content; ?>
    </div>
  </div>
</section>