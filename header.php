<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="navbar">
    <div class="knoppen">
        <img src="<?php echo get_template_directory_uri()?>/pictures/screenshot2.png" alt="navbar-logo" id="header-img">
        <?php  wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container_class' => 'menu') );?>
    </div>
</div>
<header>
<!--    <img src="--><?php //echo get_template_directory_uri()?><!--/Bg-images/Movie-background.jpg" alt="bg-img" id="bg-img">-->


</header>
