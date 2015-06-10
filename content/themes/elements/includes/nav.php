<nav>
  <?php
  $nav = array(
    'theme_location'  => 'menu_primary',
    'container' => ' ',
    'items_wrap' => '<ul>%3$s</ul>'
  );
  
  wp_nav_menu( $nav );
  ?>
</nav>