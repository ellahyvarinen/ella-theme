<?php //get_header(); ?>

<?php if (!have_posts()) : ?>
	<section class="page-search theme--secondary padding--medium">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php get_template_part('templates/page', 'header'); ?>
					<h2>Nothing found.</h2>
					<p>Try again or go <a href="<?= esc_url(home_url('/')); ?>" class="link link--primary">home.</a></p>
					<br />
					<?php get_search_form(); ?>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'search'); ?>
	</div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
<?php //get_footer(); ?>