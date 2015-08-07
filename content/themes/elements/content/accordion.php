<?php
$id = preg_replace( '/\s+/', '',  strtolower(get_sub_field( 'accordion_c_id' )) );
?>
<section <?php if($id){ echo 'id="' . $id . '"'; } ?> class="section-accordion">
  <div class="section-body">
    <ul>
      <?php
      if( have_rows('accordion_item') ):
        while( have_rows('accordion_item') ): the_row();
          $title = get_sub_field( 'accordion_item_title' );
          $desc = get_sub_field( 'accordion_item_desc' );
          ?>

          <li>
            <p><span class="is-bold"><?php echo $title; ?></span><i></i></p>

            <div>
              <?php echo $desc; ?>
            </div>
          </li>

          <?php
        endwhile;
      endif;
      ?>
    </ul>
  </div>
</section>
