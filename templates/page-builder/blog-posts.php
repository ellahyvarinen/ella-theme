<section class="blog-posts padding--large theme--tertiary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_sub_field('text'); ?>
            </div>

            <?php $recent_posts = new WP_Query( array('post_type' => 'post','posts_per_page' => 3, 'post_status' => 'publish')); ?>
            <?php if ( $recent_posts->have_posts() ) : ?>
                <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

                    <div class="col-md-4">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php //the_post_thumbnail('square'); ?>
                        </a>
                        <?php endif; ?>
                        <div class="post">
                            <?php $cat = get_the_category(); ?>
                            <span class="entry__categories"><?php echo $cat[0]->cat_name; ?></span>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="entry__title subheading"><?php the_title(); ?></h3>
                            </a>
                            <span class="entry__date"><?php the_date(); ?></span>
                        </div>
                        
                    </div> 

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
    </div>
</section>