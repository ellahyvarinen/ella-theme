<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container">
      <div class="row">

        <div class="col-md-8 offset-md-2">
          <div class="post-header">
            <span class="entry__categories"><?php the_category(','); ?></span>
            <span class="entry__date"><?php the_date(); ?></span>
            <h1 class="entry__title"><?php the_title(); ?></h1>
          </div>
        </div>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="col-12 padding--small-bottom">
           <?php the_post_thumbnail('large'); ?>
         </div>
       <?php endif; ?>

       <div class="col-md-8 offset-md-2">
        <?php if ( has_excerpt() ) : ?><div class="entry__excerpt quote padding--small-bottom"><?php echo get_the_excerpt(); ?></div><?php endif; ?>

        <div class="entry__content">
          <?php the_content(); ?>
        </div>

        <div class="post-footer padding--large">
          <?php //comments_template('/templates/comments.php'); ?>
          <?php //echo get_the_author(); ?>
        </div>

      </div>

    </div>
  </div>
</article>
<?php endwhile; ?>
