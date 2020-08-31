<?php
/**
 * Template Name: Page builder
 */
?>

<?php use Roots\Sage\Setup; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-builder'); ?>
<?php endwhile; ?>
