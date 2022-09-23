<section class="hero-element">
	<div class="container container--large">
		<div class="row align-items-center">

			<div class="col-md-6 hero-element__text padding--small">
				<?php the_sub_field('text'); ?>
			</div>
			<div class="col-md-6 hero-element__image d-flex align-items-end">
				<?php 
				$image = get_sub_field('image');
				if( !empty( $image ) ): ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
			</div>

		</div>
	</div>
</section>