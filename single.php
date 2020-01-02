<?php get_header() ?>

    <div class="main">
        <div class="container">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <article class="post">
                    <h3>
                            <?php the_title() ?>
                    </h3>
                    <div class="meta">Created by <?php the_author(); ?> on <?php the_date('l, F jS, Y' ); ?></div>

                    <?php if(has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail() ?>
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                    <br>
                    
            </article>
                <?php endwhile; ?>
            <?php else :  ?>
                <?php echo wpautop('Sorry, No posts were found'); ?>
            <?php endif; ?>
        </div>        
           <?php get_footer() ?>
    </div>
