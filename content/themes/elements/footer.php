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
      
      echo '</ul>';
      
    endif;
    ?>
  </footer>
  
  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>