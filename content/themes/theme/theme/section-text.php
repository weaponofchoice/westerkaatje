<?php
$title = get_sub_field( 'text_title' );
$content = get_sub_field( 'text_content' );
?>
<section class="section section-text pad-extra-top">
  <div class="section-text-content">
    <h2 class="is-uppercase is-bold"><?php echo $title; ?></h2>
    <div>
      <?php echo $content; ?>
    </div>
  </div>
</section>