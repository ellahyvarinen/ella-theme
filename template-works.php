<?php
/**
 * Template Name: Works
 */
?>

<?php use Roots\Sage\Setup; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'works'); ?>
<?php endwhile; ?>