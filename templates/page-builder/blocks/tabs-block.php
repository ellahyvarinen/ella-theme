<?php 
$element_id = uniqid();
?>
<div class="block-tabs">
	<?php if( have_rows('tabs') ) : ?>
		<nav>
			<div class="nav nav-tabs" id="" role="tablist">
				<?php while ( have_rows('tabs') ) : the_row(); ?>
					<?php $row_index = get_row_index(); ?>
					<a class="nav-item nav-link <?php if ($row_index==1) : echo 'active'; endif;?>" data-toggle="tab" href="#tab-<?php echo $element_id; ?>-<?php echo $row_index; ?>" role="tab" >
						<?php the_sub_field('heading'); ?>
					</a>
				<?php endwhile; ?>
			</div>
		</nav>
	<?php endif; ?>

	<?php if( have_rows('tabs') ) : ?>
		<div class="tab-content" id="">
			<?php while ( have_rows('tabs') ) : the_row(); ?>
				<?php $row_index = get_row_index(); ?>
				<div class="tab-pane fade show <?php if ($row_index==1) : echo 'active'; endif;?>" id="tab-<?php echo $element_id; ?>-<?php echo $row_index; ?>" role="tabpanel">
					<?php the_sub_field('content'); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>