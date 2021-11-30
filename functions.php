<?php
function adding_scripts() {
    wp_register_style('homestyle', get_stylesheet_directory_uri() . '/css/homestyle.css');
    wp_enqueue_style( 'homestyle');
}
add_action('wp_enqueue_scripts','adding_scripts');

