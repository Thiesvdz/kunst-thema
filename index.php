<!--Post items pagina-->
<?php


        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>


            <?php endwhile;

        else :
            echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

        endif;

        get_footer();


        ?>



