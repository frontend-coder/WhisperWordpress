<?php

/**
 * Enqueue scripts and styles.
 */
function whisper_scripts() {
//	wp_enqueue_style( 'lawasf-mainstyle', get_stylesheet_uri() );
wp_enqueue_style( 'whisper-googlefont-poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900');
wp_enqueue_style( 'whisper-googlefont-lora', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i');
wp_enqueue_style( 'whisper-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css');

wp_enqueue_style( 'whisper-animate', get_template_directory_uri() . '/assets/css/animate.css');
wp_enqueue_style( 'whisper-owlcarousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
wp_enqueue_style( 'whisper-owlthemedefault', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
wp_enqueue_style( 'whisper-magnificpopup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
wp_enqueue_style( 'whisper-aos', get_template_directory_uri() . '/assets/css/aos.css');
wp_enqueue_style( 'whisper-ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');
wp_enqueue_style( 'whisper-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css');
wp_enqueue_style( 'whisper-timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css');
wp_enqueue_style( 'whisper-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
wp_enqueue_style( 'whisper-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
wp_enqueue_style( 'whisper-mystyle', get_template_directory_uri() . '/assets/css/style.css');

wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),'',true);
wp_enqueue_script( 'jquery');

wp_enqueue_script( 'whisper-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-jsowlcarousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-jsmagnificpopup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-jsaos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-bootstrapdatepickerjs', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-timepickerjs', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-scrollaxjs', get_template_directory_uri() . '/assets/js/scrollax.min.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array('jquery'), '', true );
wp_enqueue_script( 'whisper-googlemapjs', get_template_directory_uri() . '/assets/js/google-map.js', array('jquery'), '', true );
wp_enqueue_script( 'whisper-mainjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );





	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'whisper_scripts' );






?>