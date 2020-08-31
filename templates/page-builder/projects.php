<?php $posts = get_sub_field('items'); ?>
<?php $layout = get_sub_field('layout'); ?>


<section class="projects padding--medium">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_sub_field('text'); ?>
            </div>
        </div>
    </div>

    <div class="container container--large">
        <div class="row">
            <?php if( $posts ): $loopCount = 0; ?>
                <?php foreach( $posts as $post): $loopCount++; // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>
                    <?php if ( $layout == 'custom') : ?>
                        <div class="container padding--medium wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="">
                            <div class="row <?php if (($loopCount % 2) == 0 ) : echo 'justify-content-end'; endif; ?>">
                                <div class="col-md-8">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="padding--small-bottom">
                                            <?php the_post_thumbnail('xlarge'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <?php if ( has_excerpt() ) : ?><p><?php echo get_the_excerpt(); ?></p><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="<?php echo $layout; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <div class="project bg--image d-flex align-items-end" style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);">
                                    <h3 class="subheading"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
        </div>
    </div>

</section>