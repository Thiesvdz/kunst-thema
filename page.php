<?php


get_header();


if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <div class="content">
            <div class="title"><?php the_title() ?></div>
            <div class="desc"><?php the_content() ?></div>
<!--            <a href="--><?php //the_permalink() ?><!--"class="btn btn-green">Meer lezen</a>-->
        </div>
    <?php endwhile;

else :
    echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

endif;

get_footer();


?>



