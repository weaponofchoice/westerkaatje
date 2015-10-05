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
  <meta name="description" content="Westerkaatje catert voor bedrijven, bij mensen thuis of op locatie, maar heeft ook een eigen traiteur en trattoria. De mediterrane kook- en eetcultuur is daarbij het voornaamste kenmerk. Daarbij maken we zoveel mogelijk gebruik van biologische en seizoensgebonden producten. Wij verzorgen feesten zowel voor particulieren als voor bedrijven; culturele evenementen, besloten congressen, symposia en recepties. Variërend van een tapasbuffet, een volledig uitgeserveerd meergangenmenu maar ook lunches, borrels, een hight tea of gewoon koffie met taart! Bij Westerkaatje Traiteur kunt u zelf voor een redelijke prijs een gezonde, verse en heerlijke maaltijd samenstellen. Alles wat bij de aankleding van een tafel hoort is er ook te koop. In onze Trattoria kunt u ook ter plekke zitten, proeven en genieten van al het lekkers dat de keuken van Westerkaatje voor u op tafel zet.">

  <!-- LINK tags -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">

  <!-- WP_HEAD() -->
  <?php wp_head(); ?>
</head>

<?php include( 'includes/aside.php' ); ?>

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
