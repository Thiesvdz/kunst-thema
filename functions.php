<?php
function kunst_adding_scripts() {

    wp_enqueue_style('homestyle', get_template_directory_uri() . '/css/homestyle.css', array(), time());
    wp_enqueue_style('home', get_template_directory_uri() . '/css/home.css', array(), time());
    wp_enqueue_style('about-us', get_template_directory_uri() . '/css/about-us.css', array(), time());
    wp_enqueue_style('events', get_template_directory_uri() . '/css/events.css', array(), time());
    wp_enqueue_style('movies', get_template_directory_uri() . '/css/movies.css', array(), time());
    wp_enqueue_script('kunst-script', get_template_directory_uri() . '/js/script.js');
}
add_action('wp_enqueue_scripts','kunst_adding_scripts');

function kunst_init_thema() {
    register_nav_menu('main-menu', __( 'Hoofdmenu' ));
}
add_action( 'init', 'kunst_init_thema' );

function kunst_setup_thema(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 100, 100 );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 3,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 3,
        ),
    ) );
}


add_action('after_setup_theme','kunst_setup_thema');
add_theme_support( 'woocommerce' );

add_action( 'widgets_init', 'kunst_register_sidebars' );
function kunst_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Footer' ),
            'description'   => __( 'Footer sidebar' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}