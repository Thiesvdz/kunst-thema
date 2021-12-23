<?php
function kunst_adding_scripts() {
    wp_enqueue_style('homestyle', get_template_directory_uri() . '/css/homestyle.css', array(), time());
    wp_enqueue_script('kunst-script', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts','kunst_adding_scripts');

