<?php
use Roots\Sage\Setup;
//use Roots\Sage\Wrapper;
?>

<?php // Get header template ?>
<?php get_header(); ?>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <div class="wrap" role="document">
     <main>
      <div class="container">
       <?php if ( have_posts() ) : ?>
        <?php // The Loop ?>
        <?php while ( have_posts() ) : the_post(); ?>
         <?php the_content(); ?>
       <?php endwhile; ?>
       <?php else : ?>
         <?php //do something ?>
       <?php endif; ?>
     </div>
   </main>
 </div>
 
 <?php // Get footer template ?>
 <?php get_footer(); ?>
