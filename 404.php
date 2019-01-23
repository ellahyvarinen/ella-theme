<?php get_header(); ?>
<section class="page-404">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Ooooops. Sorry. </h2>
				<p>The page you are looking for is MIA. Try some other page instead or go <a href="<?= esc_url(home_url('/')); ?>" class="highlight">home.</a></p>
				<br />
				<?php get_search_form(); ?>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>