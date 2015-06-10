<?php
// Options
$text_o_background = get_sub_field( 'text_o_background' );

// Content
$text_c_text = get_sub_field( 'text_c_text' );
?>
<section class="section-text<?php if( $text_o_background == true ){ echo ' has-bg'; } ?>">
  <div class="section-body">
    <?php echo $text_c_text; ?>
  </div>
</section>