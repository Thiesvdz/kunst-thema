<!--Eye news pagina-->

<div class="bg">

<?php

        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>



            <?php endwhile;

        else :
            echo '<p>There are no posts!</p>';

        endif;

        get_footer();


        ?>

</div>

