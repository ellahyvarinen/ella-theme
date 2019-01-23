<?php
$query = new WP_Query( array(
	'post_type' => array( 'portfolio'), 
	'posts_per_page' => -1,
	'post_status' => 'publish',
)); ?>

<section class="works">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

		<?php if ( $query->have_posts() ) : $i=0; ?>
			<?php while ( $query->have_posts() ) : $i++; $query->the_post(); ?>
				<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
				<a href="<?php the_permalink(); ?>">
					<div class="row align-items-end bg-img work <?php if( !$featured_img_url ) : echo 'no-img'; endif; ?>" <?php if( $featured_img_url ) : ?>style="background-image: url(<?php echo $featured_img_url; ?>);"<?php endif; ?>>
						<div class="col-md-12">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
				</a>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
</section>