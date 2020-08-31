<?php
if ( ! post_password_required() ) :

if( have_rows('page_builder') ):
	while ( have_rows('page_builder') ) : the_row();

		if ( get_row_layout() == 'hero_element' )
			get_template_part('templates/page-builder/hero-element');

		elseif ( get_row_layout() == 'basic_content' )
			get_template_part('templates/page-builder/basic-content');

		elseif ( get_row_layout() == 'projects' )
			get_template_part('templates/page-builder/projects');

		elseif ( get_row_layout() == 'highlight' )
			get_template_part('templates/page-builder/highlight');

		elseif ( get_row_layout() == 'cta' )
			get_template_part('templates/page-builder/cta');

		elseif ( get_row_layout() == 'blog_posts' )
			get_template_part('templates/page-builder/blog-posts');

		elseif ( get_row_layout() == 'one_column' )
			get_template_part('templates/page-builder/one-column');

		elseif ( get_row_layout() == 'two_columns' )
			get_template_part('templates/page-builder/two-columns');

		elseif ( get_row_layout() == 'three_columns' )
			get_template_part('templates/page-builder/three-columns');


	endwhile;
endif;

else :
	echo '<div class="container">';
	echo get_the_password_form();
	echo '</div>';
endif;
?>