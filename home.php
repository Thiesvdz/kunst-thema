<!--Eye news pagina-->

<?php


        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <div class="content-home">

                <div class="title-home"><?php the_title() ?></div>
                <em><?php echo the_date()?></em><br><br>
                <a href="<?php the_permalink() ?>" >Read more</a><br>
                <hr>
            </div>
            <?php endwhile;

        else :
            echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

        endif;

        get_footer();


        ?>



