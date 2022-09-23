<article <?php post_class('padding--xsmall'); ?>>
	<div class="row">
		<div class="col-md-2">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail('square'); ?>
			<?php endif; ?>
		</div>
		<div class="col-md-10">
			<header>
				<?php get_template_part('templates/entry-meta'); ?>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<div class="entry-summary">
				<?php if ( has_excerpt() ) : ?><?php the_excerpt(); ?><?php endif; ?>
			</div>
		</div>
	</div>
</article>
<hr>