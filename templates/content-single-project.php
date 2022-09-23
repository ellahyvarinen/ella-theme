<?php while (have_posts()) : the_post(); ?>

	<?php $name = get_the_title(); ?>
	<?php $post_slug = $post->post_name; ?>
	<article <?php post_class(); ?> id="<?php echo $post_slug; //echo strtolower($name); ?>">

		<div class="container container--large d-flex justify-content-center padding--xsmall">
			<?php the_post_thumbnail('xlarge'); ?>
		</div>

		<div class="container padding--large-bottom">
			<div class="row">

				<div class="col-md-8 offset-md-2">
					<div class="project__header">
						<div class="entry__categories">
							<?php
							$categories = get_the_category( $post->ID );
							foreach ( $categories as $category ) :
								printf( '<span>%1$s &nbsp;</span>',
									esc_html( $category->name )
								);
							endforeach;
							?>
						</div>
						<h1 class="entry__title"><?php the_title(); ?></h1>
					</div>
				</div>

				<div class="col-md-8 offset-md-2">
					<?php if ( has_excerpt() ) : ?><div class="entry__excerpt quote padding--small-bottom"><?php echo get_the_excerpt(); ?></div><?php endif; ?>
					<div class="entry__content">
						<?php the_content(); ?>
					</div>
				</div>

		<!--
		<div class="col-md-12">
			<div class="project__footer padding--large">
				<div class="row justify-content-between">
				<?php /*
				if( 'project' == get_post_type() ) {
					previous_post_link();
					next_post_link();
				} */
				?>
				<?php if( 'project' == get_post_type() ) : $prev_post = get_previous_post(); $next_post = get_next_post(); ?>
					<?php if ( ! empty( $next_post ) ): ?>
						<div class="col-md-4">
							<a href="<?php echo get_permalink( $next_post->ID ); ?>">
								<?php echo get_the_post_thumbnail($next_post->ID, 'square'); ?>
								<p><?php echo apply_filters( 'the_title', $next_post->post_title ); ?></p>
							</a>
						</div>
					<?php endif; ?>
					<?php if ( ! empty( $prev_post ) ): ?>
						<div class="col-md-4">
							<a href="<?php echo get_permalink( $prev_post->ID ); ?>">
								<?php echo get_the_post_thumbnail($prev_post->ID, 'square'); ?>
								<p><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?></p>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
-->


			</div>
		</div>
	</article>
<?php endwhile; ?>