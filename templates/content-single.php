<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="post-header">
            <h1 class="title"><?php the_title(); ?></h1>
            <p><?php the_date(); ?></p>
          </div>

          <div class="post-content">
            <?php the_content(); ?>
          </div>

          <div class="post-footer">
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            <?php //comments_template('/templates/comments.php'); ?>
          </div>
          
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
