<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rafael_Fernandez_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.jpg" />
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

  <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/assets/device-mockups/device-mockups.min.css">
	<?php wp_head(); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'rafaelportfolio' ); ?></a>



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo.jpg" class="logo-small animated bounce"><a class="animated bounce navbar-brand js-scroll-trigger" href="#page-top bounce">Rafael Fernandez</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <?php 
        
        // This is what is adding classes to anchor tags
        function add_link_atts($atts) {
          $atts['class'] = "nav-link js-scroll-trigger";
          return $atts;
        }
        add_filter( 'nav_menu_link_attributes', 'add_link_atts');
        
        wp_nav_menu( array(
          'theme_location'  => 'menu-1',       
          'container_class' => 'navbar-collapse collapse',  
          'container'       => 'div',
          'menu'            => 'primary',
          'menu_class'      => 'navbar-nav ml-auto',
          'menu-item'       => 'nav-item',      
        ) );
       ?>
      </div> 
    </div>
  </nav>

