<?php
// Controlling text color
$content_textColor = get_sub_field( 'hero_o_c_textColor' );
if( $content_textColor ){
  $text_class = 'is-white';
} else {
  $text_class = '';
}

// Variables
$banner = get_sub_field( 'hero_banner' );

$content_image = get_sub_field( 'hero_c_image' );
$content_title = get_sub_field( 'hero_c_title' );
$content_text = preg_replace( '/<p>/', '<p class="' . $text_class . '">', get_sub_field( 'hero_c_text' ) );

// Output
echo '<section class="section section_hero has_no-pad">';
  
  // Hero background image
  if( $banner ): 
    echo '<div class="section_hero-banner is-stretched-wrapper">';
      echo '<img class="is-stretched-object" src="' . $banner['sizes']['large'] . '" width="' . $banner['width'] . '" height="' . $banner['height'] . '">';
    echo '</div>';
  endif;
  
  // Hero content container
  if( $content_logo || $content_title || $content_text ):
    echo '<div class="section_content">';
      
      // Logo
      if( $content_image ):
        echo '<img src="' . $content_image['sizes']['medium'] . '" width="' . $content_image['width'] . '" height="' .   $content_image['height'] . '">';
      endif;
      
      // Title
      if( $content_title ):
        echo '<h2 class="' . $text_class . '">' . $content_title . '</h2>';
      endif;
      
      // Text
      if( $content_text ):
        echo $content_text;
      endif;
      
    echo '</div>';
  endif;
  
echo '</section>';

// <a href="javascript:;" class="arrow arrow-scroll"><img src="<?php echo bloginfo( 'template_directory' ) . /img/arrow.svg"></a>
?>