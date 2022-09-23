<?php $settings = get_sub_field('settings'); ?>
<?php $padding = $settings['padding']; ?>
<?php $bg_color = $settings['theme']; ?>
<?php $align = $settings['alignment']; ?>
<?php $row_id = $settings['row_id']; ?>

<section class="three-column bg bg--<?php echo $bg_color; ?>" <?php if ($row_id) {echo 'id="'.$row_id.'"';} ?>>
	<div class="container">
		<div class="row align-items-<?php echo $align; ?> padding--<?php echo $padding; ?>">
			<?php if ( !empty(get_sub_field('text')) ) : ?>
				<div class="col-12">
					<?php the_sub_field('text'); ?>
				</div>
			<?php endif; ?>
			<div class="col-md-4">
				<?php if( have_rows('column_1') ): 
					while ( have_rows('column_1') ) : the_row();
						if( have_rows('blocks') ): 
							while ( have_rows('blocks') ) : the_row();
								get_template_part('templates/page-builder/blocks/block-builder');
							endwhile;
						endif;
					endwhile;
				endif; ?>
			</div>
			<div class="col-md-4">
				<?php if( have_rows('column_2') ): 
					while ( have_rows('column_2') ) : the_row();
						if( have_rows('blocks') ): 
							while ( have_rows('blocks') ) : the_row();
								get_template_part('templates/page-builder/blocks/block-builder');
							endwhile;
						endif;
					endwhile;
				endif; ?>
			</div>
			<div class="col-md-4">
				<?php if( have_rows('column_3') ): 
					while ( have_rows('column_3') ) : the_row();
						if( have_rows('blocks') ): 
							while ( have_rows('blocks') ) : the_row();
								get_template_part('templates/page-builder/blocks/block-builder');
							endwhile;
						endif;
					endwhile;
				endif; ?>
			</div>
		</div>
	</div>
</section>