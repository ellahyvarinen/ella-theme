<?php //get_header(); ?>
<section class="page-404 theme--secondary padding--medium">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<span class="subheading">404</span>
			</div>
			<div class="col-md-6">
				<?php get_template_part('templates/page', 'header'); ?>

				<p>Ooooops. Sorry. The page you are looking for could not be found. Try search or go <a href="<?= esc_url(home_url('/')); ?>" class="link link--primary">home.</a></p>
				<br />
				<?php get_search_form(); ?>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>
<?php //get_footer(); ?>