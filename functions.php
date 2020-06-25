<?php 

function laadStijlblad() {
    wp_enqueue_style( 'stijl', get_stylesheet_uri() );
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
