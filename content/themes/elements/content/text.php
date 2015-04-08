<?php
// Options
$text_menu = get_sub_field( 'text_o_menu' );
$text_menu_name = get_sub_field( 'text_o_menu_name' );
if( $text_menu == true ){
  $text_id = strtolower( $text_menu_name );
}

$text_pos = get_sub_field( 'text_o_c_pos' );
$text_align = get_sub_field( 'text_o_c_align' );

// Content
$title = get_sub_field( 'text_c_title' );
$content = preg_replace( '/<p>/', '<p class="is_aligned-' . $text_align . '">', get_sub_field( 'text_c_text' ) );
?>
<section class="section section_text" id="<?php echo $text_id; ?>">
  <div class="section_content row <?php echo 'is_positioned-' . $text_pos; ?>">
    <h2 class="s-4 columns is_uppercase is_bold <?php echo 'is_aligned-' . $text_align; ?>">
      <?php echo $title; ?>
    </h2>
    <div class="s-4 columns">
      <?php echo $content; ?>
    </div>
  </div>
</section>