<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Refinery</title>
  
  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, max-width-device-width, user-scalable=no">
  
  <!-- LINK tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
  
  <!-- Fonts from Typography.com -->
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/680076/648706/css/fonts.css" />
  
  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<?php
// Instantiate mobile detect class
$detect = new Mobile_Detect;

// Check for devices, browsers, etc.
if ( $detect->isMobile() ) {
  $body_class = "is-mobile";
}
?>

<body <?php body_class($body_class); ?>>
  <header>
    <div class="logo">
      <img src="<?php echo bloginfo( 'template_directory' ); ?>/img/logo-small.svg">
    </div>
    
    <!-- Language switches -->
    <div class="lang">
      <?php
      $languages = pll_the_languages(array('raw' => 1));
      $i = 1;
      foreach ($languages as $lang) {
        if( $i == 1 ){
          echo '<a class="trigger trigger-lang is-white" href ="' . $lang['url'] . '" hreflang = "' . $lang['slug'] . '"><p>' . $lang['name'] . '</p></a>';
          echo '<span class="is-white"> - </span>';
        } else {
          echo '<a class="trigger trigger-lang is-white" href ="' . $lang['url'] . '" hreflang = "' . $lang['slug'] . '"><p>' . $lang['name'] . '</p></a>';
        }
        $i++;
      } ?>
    </div>
  </header>
  
  <main role="main">