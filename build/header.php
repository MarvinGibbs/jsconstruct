<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jsconstruct
 */
?>

<?php
  global $post;

  $page_name = $post->post_name;
  $hero_class = 'hero' . ($page_name == 'home' ? '' : "-$page_name");
  $hero_body_class = 'hero' . ($page_name == 'home' ? '' : "-$page_name") . '-body';
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/build/css/custom.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site <?php echo $hero_class; ?>">
  <div class="<?php echo $hero_body_class; ?>">

  	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'jsconstruct' ); ?></a>

    <!--=============================================>>>>>
    = HEADER =
    ===============================================>>>>-->
    <header class="site-header">

      <!--=============================================>>>>>
      = NAVBAR =
      ===============================================>>>>-->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">

          <a href="" class="navbar-brand">
            <img src="<?php bloginfo('stylesheet_directory') ?>/build/img/website_logo_transparent_background.png" alt="Schulteis Construction">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <?php
            wp_nav_menu( array(
              'theme_location'  => 'primary',
              'depth'           => 1,
              'container'       => 'div',
              'menu_class'      => 'navbar-nav ml-auto',
              'container_class' => 'collapse navbar-collapse',
              'container_id'    => 'navbarResponsive',
              'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
              'walker'          => new WP_Bootstrap_Navwalker(),
            ));

           ?>

          <!--
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="index.html" class="nav-link">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="about.html" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="gallery.html" class="nav-link">Gallery</a>
              </li>
              <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>-->
        </div><!-- .container -->
      </nav><!-- .navbar navbar-expand-lg navbar-dark bg-dark static-top -->
    </header><!-- .site-header -->
