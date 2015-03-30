<?php
$text_pos = get_sub_field( 'text_o_c_pos' );
$text_align = get_sub_field( 'text_o_c_align' );

$title = get_sub_field( 'text_c_title' );
$content = preg_replace( '/<p>/', '<p class="is-aligned-' . $text_align . '">', get_sub_field( 'text_c_text' ) );
?>
<section class="section section_text">
  <div class="section_content row <?php echo 'is-positioned-' . $text_pos; ?>">
    <h2 class="s-4 columns is_uppercase is_bold <?php echo 'is-aligned-' . $text_align; ?>">
      <?php echo $title; ?>
    </h2>
    <div class="s-4 columns">
      <?php echo $content; ?>
    </div>
  </div>
</section>