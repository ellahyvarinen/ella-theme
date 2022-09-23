<?php $settings = get_sub_field('theme'); ?>

<div class="block-highlight theme--<?php echo $settings; ?>">
	<div class="container-fluid">
		<div class="block-highlight__wrapper">
			<?php if (get_sub_field('heading')) : ?><h3 class="block-highlight__title"><?php the_sub_field('heading'); ?></h3><?php endif; ?>			
			<p class="block-highlight__text"><?php the_sub_field('text'); ?></p>
		</div>
	</div>
</div>