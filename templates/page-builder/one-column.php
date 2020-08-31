<?php $settings = get_sub_field('settings'); ?>
<?php $padding = $settings['padding']; ?>
<?php $bg_color = $settings['theme']; ?>
<?php $row_id = $settings['row_id']; ?>

<section class="one-column bg bg--<?php echo $bg_color; ?>" <?php if (!empty($row_id)) : echo 'id="'. $row_id.'"';endif; ?>>
	<div class="container">
		<div class="row padding--<?php echo $padding; ?>">
			<div class="col-12">
				<?php if( have_rows('column') ): 
					while ( have_rows('column') ) : the_row();
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