<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Whisper
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title>Whisper - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php
$favicon_site = get_field('all-site-favicon', 'option');
 if ($favicon_site) :
$favicon_site_url = $favicon_site['url'];
?>
	<link rel="shortcut icon" href="<?php echo esc_url($favicon_site_url);?>" type="image/x-icon">
<?php endif; ?>


   <!--  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> -->
   <!--  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
 1   <link rel="stylesheet" href="css/owl.carousel.min.css">
 2  <link rel="stylesheet" href="css/owl.theme.default.min.css">
 3   <link rel="stylesheet" href="css/magnific-popup.css">
  4  <link rel="stylesheet" href="css/aos.css">
  5  <link rel="stylesheet" href="css/ionicons.min.css">
 6   <link rel="stylesheet" href="css/bootstrap-datepicker.css">
 7   <link rel="stylesheet" href="css/jquery.timepicker.css">
 8   <link rel="stylesheet" href="css/flaticon.css">
 9   <link rel="stylesheet" href="css/icomoon.css">
 0   <link rel="stylesheet" href="css/style.css"> -->

<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
<?php if(get_field('all-site-logotype', 'option')) :?>
	      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php $all_site_logotype = the_field('all-site-logotype', 'option'); echo esc_attr($all_site_logotype); ?></a>
<?php endif; ?>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Меню
	      </button>

	<?php
			wp_nav_menu( array(
				// [ 'items_wrap' => '%3$s' ],
				//  [ 'container' => '' ],
				'container' => 'div',
				'container_id' => 'ftco-nav',
				'container_class' => 'collapse navbar-collapse',
				'theme_location' => 'menu-1',
				'menu_id'        => '',
				'menu_class'          =>  'navbar-nav ml-auto',

			) );
			?>
			 <!-- <div class="collapse navbar-collapse" id="ftco-nav"> -->
	<!--      <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>
	          <li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul> -->
	   <!--    </div> -->


	    </div>
	  </nav>
    <!-- END nav -->



















