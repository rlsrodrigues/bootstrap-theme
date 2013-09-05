<?php get_header(); ?>
            <div class="content">
                <div class="content-page relative">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                            <div class="entry">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif ?>
                </div>
            </div>
<?php get_footer(); ?>