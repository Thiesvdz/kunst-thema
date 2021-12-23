<!--Post items pagina-->
<?php


        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <div class="content-index">
                <div class="title-index"><?php the_title() ?></div>
                <div class="desc-index"><?php the_content() ?></div>
<!--                <a href="--><?php //the_permalink() ?><!--">Read more</a>-->
            </div>
            <?php endwhile;

        else :
            echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

        endif;

        get_footer();


        ?>



