
<div class="bg">
    <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

        <?php
            get_header();
        ?>

            <div class="content">
                <div class="title"><?php the_title() ?></div>


                <?php if (has_post_thumbnail()):?>
                    <?php the_post_thumbnail('medium');?>
                <?php endif ?>

                <div class="desc"><?php the_content() ?></div>
    <!--            <a href="--><?php //the_permalink() ?><!--"class="btn btn-green">Meer lezen</a>-->
            </div>

            <div class="main-content">
                <h1>Hier komt de main content</h1>
            </div>
        <?php endwhile;

    else :
        echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

    endif;

    get_footer();


    ?>
</div>

