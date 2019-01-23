<?php while (have_posts()) : the_post(); ?>

  <?php $name = get_the_title(); ?>
  <?php //print_r($post); ?>
  <?php $post_slug = $post->post_name; ?>
  <article <?php post_class(); ?> id="<?php echo $post_slug; //echo strtolower($name); ?>">
    
    <section class="work-art">
      <div class="<?php echo $post_slug; ?>"></div>
    </section>
    
    <section class="work-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="work-header">
              <a href="<?= esc_url(home_url('/works')); ?>" class="highlight"><?php pll_e('Back to works'); ?></a>
              <h1 class="title"><?php the_title(); ?></h1>
              <p><?php the_date(); ?></p>
            </div>

            <div class="work-content">
              <?php the_content(); ?>
            </div>

            <div class="work-footer">
              <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
              <?php //comments_template('/templates/comments.php'); ?>
            </div>

          </div>
        </div>
      </div>
    </section>

  </article>
<?php endwhile; ?>
