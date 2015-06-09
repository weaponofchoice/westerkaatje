<?php
// Content
$text = get_sub_field( 'blockText_c_text' );
?>
<section class="section-block">
  <div class="section-body text">
    <?php echo $text; ?>
    
    <?php
    // Optional button
    if( have_rows('blockText_c_button') ):
      while( have_rows('blockText_c_button') ): the_row();
        $button_link = get_sub_field( 'link' );
        $button_text = get_sub_field( 'text' );
        
        echo '<a href="' . $button_link . '">' . $button_text . '</a>';
        
      endwhile;
    endif;
    ?>
  </div>
</section>