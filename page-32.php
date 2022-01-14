<!--Events-->

<?php
get_header();
?>

<div class="event-content">

    <?php if (has_post_thumbnail()):?>
        <?php the_post_thumbnail('medium');?>
    <?php endif ?>

    <div class="desc"><?php the_content() ?></div>
</div>

<?php
get_footer();
?>