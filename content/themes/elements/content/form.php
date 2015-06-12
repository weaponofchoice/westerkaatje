<section class="section-form has-bg is-fullwidth">
  <div class="section-header">
    <?php
    $form = get_sub_field( 'form' );
    
    if( $form ):
      $title = get_sub_field( 'form_title' );
      $desc = get_sub_field( 'form_desc' );
      
      echo '<p class="is-bold is-uppercase">' . $title . '</p>';
      echo $desc;
    endif;
      ?>
  </div>
  
  <div class="section-body">
    <?php echo do_shortcode('[contact-form-7 id="58" title="Offerte"]'); ?>
  </div>
</section>