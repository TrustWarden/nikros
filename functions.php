<?php
/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

/*
*	Adding css file in header template
*/
function wpt_theme_styles(){
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap_rtl_css', get_template_directory_uri() . '/css/bootstrap-rtl.min.css');
	wp_enqueue_style('bootstrap_reboot_css', get_template_directory_uri() . '/css/bootstrap-reboot.min.css');
	wp_enqueue_style('jquery_ui_css', get_template_directory_uri() . '/css/jquery-ui.min.css');
	wp_enqueue_style('aos_css', get_template_directory_uri() . '/css/aos-master/dist/aos.css');
	// wp_enqueue_style('fontawesome_css', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

/*
*	Adding javascript file in header template
*/
function wpt_theme_js(){
	wp_enqueue_script('jQuery_js', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', '', '', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', '', '', true);
	wp_enqueue_script('jQuery_ui_js', get_template_directory_uri() . '/js/jquery-ui.min.js', '', '', true);
	wp_enqueue_script('jQuery_ui_js', get_template_directory_uri() . '/css/aos-master/dist/aos.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');
?>