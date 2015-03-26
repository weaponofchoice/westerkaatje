<?php
$title = get_sub_field( 'text_title' );
$content = get_sub_field( 'text_content' );
?>
<section class="section section_text">
  <div class="section_content row">
    <h2 class="s-4 columns is-uppercase is-bold"><?php echo $title; ?></h2>
    <div class="s-4 columns">
      <?php echo $content; ?>
    </div>
  </div>
</section>