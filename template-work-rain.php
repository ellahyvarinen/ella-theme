<?php
/**
 * Template Name: Work - Rain
 */
?>

<?php use Roots\Sage\Setup; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/works/content', 'work-rain'); ?>
<?php endwhile; ?>
