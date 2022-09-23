<footer class="footer theme--dark">
	<div class="container container--large">
		<div class="row">
			<div class="col-md-3">
				<?php 
				$footer_image = get_field('footer_logo', 'option');
				if( !empty( $footer_image ) ): ?>
					<div class="footer__logo">
						<img src="<?php echo esc_url($footer_image['url']); ?>" alt="<?php echo esc_attr($footer_image['alt']); ?>" />
					</div>
				<?php endif; ?>

				<?php the_field('footer_text', 'option'); ?>

				<?php if ( function_exists( 'the_privacy_policy_link' ) ): ?>
					<div class="footer__privacy-policy">
						<p><?php the_privacy_policy_link( '', '' ); ?></p>
					</div>
				<?php endif; ?>

				<p class="footer__copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>

			</div>
			<div class="col-md-3">
				<?php the_field('footer_links', 'option'); ?>
			</div>
			<div class="col-md-3"></div>
			<div class="col-md-3">
				<?php the_field('footer_social_media', 'option'); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>