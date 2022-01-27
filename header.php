<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>



<header style=" background-image: url(<?php echo get_template_directory_uri()?>/Bg-images/Movie-background.jpg)">
    <img src="<?php echo get_template_directory_uri()?>/pictures/screenshot2.png" alt="navbar-logo" id="header-img">
<!--    <img src="--><?php //echo get_template_directory_uri()?><!--/Bg-images/Movie-background.jpg" alt="bg-img" id="bg-img">-->

    <div class="navbar">
        <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container_class' => 'menu') );?>
    </div>

    <div class="navbar-klein">
        <button class="btn" ><img src="https://img.icons8.com/material-outlined/24/000000/menu--v1.png"/></button>
        <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container_class' => 'menu-klein', 'menu_class' => ''));?>
    </div>
</header>



<div class="main-content">
    <h1><?php the_title()?><h1>
</div>
