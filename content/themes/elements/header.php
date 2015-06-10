<?php
/**
 * @package WordPress
 */
?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <title>Westerkaatje</title>
  
  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
  
  <!-- LINK tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
  
  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<body class="is-loading">
  <!-- Header -->
  <header>
    <?php include( 'includes/nav.php' ); ?>
    
    <div class="subheader">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg">
      
      <?php
      $subtitle = get_field( 'subtitle' );
      
      echo '<p>' . $subtitle . '</p>';
      ?>
    </div>
  </header>
  
  <!-- Main content -->
  <main role="main">