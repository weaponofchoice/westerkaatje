<?php
// Content
$icon = get_sub_field( 'blockText_c_icon' );
$id = preg_replace( '/\s+/', '',  strtolower(get_sub_field( 'blockText_c_id' )) );
$text = get_sub_field( 'blockText_c_text' );
?>
<section <?php if($id){ echo 'id="' . $id . '"'; } ?> class="section-block text">
  <div class="section-body">
    <?php
    echo '<img src="' . $icon['url'] . '">';
    echo $text;
    ?>

    <?php
    // Optional button
    if( have_rows('blockText_c_button') ):
      while( have_rows('blockText_c_button') ): the_row();
        $button_link = get_sub_field( 'link' );
        $button_text = get_sub_field( 'text' );
        $button_target = get_sub_field( 'target' );

        echo '<a class="button" ' . ( ($button_target == true) ? 'target="_blank"' : "" ) . ' href="' . $button_link . '">' . $button_text . '</a>';

      endwhile;
    endif;
    ?>
  </div>
</section>
