<?php
function kunst_adding_scripts() {

    wp_enqueue_style('homestyle', get_template_directory_uri() . '/css/homestyle.css', array(), time());
    wp_enqueue_script('kunst-script', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts','kunst_adding_scripts');

function kunst_init_thema() {
<<<<<<< HEAD
    register_nav_menu('main-menu', __( 'Hoofdmenu' ));
=======
    register_nav_menu('main-menu', __('Hoofdmenu'));
>>>>>>> 316bcc06f1bcde4f11c882adac109e9f7e83c07c
}
add_action( 'init', 'kunst_init_thema' );