<?php 

function model_agency()
{
	//wp_enqueue_scripts('main-models-blog', get_theme_file_uri('/js/scripts-bundled'), NULL, '1.0', true);
	wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('model_agency_main_styles', get_stylesheet_uri());
} 

add_action('wp_enqueue_scripts', 'model_agency');
