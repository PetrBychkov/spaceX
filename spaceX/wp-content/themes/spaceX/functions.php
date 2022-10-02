<?php

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/index.js', array(), '1.0.0', true );
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

acf_add_options_page(array(
  'page_title'     => 'Настройки сайта',
  'menu_title'    => 'Настройки сайта',
  'menu_slug'     => 'theme-general-settings',
  'capability'    => 'edit_posts',
  'redirect'        => false
));
