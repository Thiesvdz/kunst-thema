<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<div class="navbar">
    <div class="logoWebsite">
        <img src="http://eye-artshop.local/wp-content/uploads/2021/12/screenshot2-1-e1638453495529.png" alt="navbar-logo" id="header-img">
    </div>
    <div class="knoppen">
        <?php  wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'navigation-menu' ) );?>
    </div>

</div>
