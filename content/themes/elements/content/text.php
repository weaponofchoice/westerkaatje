<?php
// Options
$text_o_background = get_sub_field( 'text_o_background' );

// Content
$id = preg_replace( '/\s+/', '',  strtolower(get_sub_field( 'text_c_id' )) );
$text_c_text = get_sub_field( 'text_c_text' );
?>
<section <?php if($id){ echo 'id="' . $id . '"'; } ?> class="section-text<?php if( $text_o_background == true ){ echo ' has-bg'; } ?>">
  <div class="section-body">
    <?php echo $text_c_text; ?>
  </div>
</section>
