<?php get_header(); ?>
    <div class="content relative">

        <?php //looping example ?>
        <section class="content-page left">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
        
        </section>

        <?php get_sidebar(); ?>

        <section class="clear"></section>
    </div>
<?php get_footer(); ?>