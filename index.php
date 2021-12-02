<?php


        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <div class="content">
                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                <?php the_content() ?>
            </div>
            <?php endwhile;

        else :
            echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

        endif;

        get_footer();


        ?>



