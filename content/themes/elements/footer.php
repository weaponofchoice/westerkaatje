  </main>

  <!-- Footer -->
  <footer>
    <p class="small">©2010-2015 Westerkaatje</p>

    <?php
    if( have_rows('platforms', 'option') ):

      echo '<ul>';

      while( have_rows('platforms', 'option') ): the_row();

        $platform = get_sub_field( 'platform' );
        $link = get_sub_field( 'link' );

        echo '<li><a href="' . $link . '" target="_blank"><img src="' . get_template_directory_uri() . '/img/social/' . $platform . '-white.svg"></a></li>';

      endwhile;

      echo '<li><a href="http://westerkaatje.us9.list-manage.com/subscribe?u=ce887e476015cd191f20b1de3&id=c137970d03" target="_blank"><img src="' . get_template_directory_uri() . '/img/icon-email.svg"><span> Aanmelden nieuwsbrief</span></a></li>';

      echo '</ul>';

    endif;
    ?>
  </footer>

  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>
