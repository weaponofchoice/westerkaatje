  </main>
  
  <footer>
    <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/logo-extended.svg">
    
    <p class="is-small is-white">Follow us on:</p>
    
    <?php
    if( have_rows('social_platforms', 'option') ):
      
      echo '<ul>';
        
        while( have_rows('social_platforms', 'option') ): the_row();
         
           $social_platform = get_sub_field( 'social_platform', 'option' );
           $social_link = get_sub_field( 'social-link', 'option' ); ?>
         
           <li>
             <a href="<?php echo $social_link; ?>" target="_blank">
               <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/social/<?php echo $social_platform; ?>.svg">
             </a>
           </li>
         
           <?php
         endwhile;
         
       echo '</ul>';
       
     endif;
     ?>
  </footer>
  
  <?php wp_footer(); ?>
</body>
</html>