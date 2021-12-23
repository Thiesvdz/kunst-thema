<!--Eye news pagina-->

<div class="bg">

<?php

        get_header();


        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <article>

                <?php if (has_post_thumbnail()):?>
                    <?php the_post_thumbnail('post-thumbnail');?>
                <?php endif ?>

                <div class="news-text">
                    <div class="title-home"><?php the_title() ?></div>
                        <em><?php echo the_date()?></em><br><br>
                    <a href="<?php the_permalink() ?>" >Read more</a><br>
                </div>

            </article>

            <?php endwhile;

        else :
            echo '<p style=" position: absolute; left: 43%; top: 30%; ">There are no posts!</p>';

        endif;

        get_footer();


        ?>

</div>

