<?php
if( have_rows('accordion_item') ):
  while( have_rows('accordion_item') ): the_row();
    $title = get_sub_field( 'accordion_item_title' );
    $desc = get_sub_field( 'accordion_item_desc' );
    ?>

    <section class="section-accordion has_no-pad">
      <div class="section-header">
        <p class="is-bold"><?php echo $title; ?></p>
      </div>

      <div class="section-body">
        <?php echo $desc; ?>
      </div>
    </section>

    <?php
  endwhile;
endif;
?>
