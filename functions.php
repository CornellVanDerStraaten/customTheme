<?php 

function laadStijlblad() {
    wp_enqueue_style( 'stijl', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
}

add_action('init', 'laadStijlblad');

// Menu registreren
function registreer_menu() {
    register_nav_menus(
    array(
        'hoofd-menu' => __('Hoofd menu')
    )
);
    
}
add_action('init', 'registreer_menu');

// Register Custom Navigation Walker

function register_navwalker() {
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker');
