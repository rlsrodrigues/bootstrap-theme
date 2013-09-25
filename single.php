<?php get_header(); ?>
    <div class="content relative">

        <?php //looping example ?>
        <section class="content-page left">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <section class="entry">
                    <?php the_post_thumbnail('medium', array('class' => 'alignleft')) ?>
                    <?php the_content(); ?>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        
        </section>

        <?php get_sidebar(); ?>

        <section class="clear"></section>
    </div>
<?php get_footer(); ?>