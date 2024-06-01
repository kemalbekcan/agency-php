<?php 

function theme_enqueue_styles() {
    // Ana stil dosyanızı ekleyin
    wp_enqueue_style('main-styles', get_stylesheet_uri());

	// Google Fontları ekleyin
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('google-fonts-hanken', 'https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap');

	wp_enqueue_style('bootstrap-min-styles', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('custom-font', get_template_directory_uri() . '/css/custom-font.css');
	wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_scripts() {
    // jQuery ekle
    wp_enqueue_script('jquery-min-js', get_template_directory_uri(). '/js/jquery.min.js');

    // Bootstrap JavaScript dosyasını ekleyin
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');