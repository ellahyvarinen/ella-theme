<?php
	if ( get_row_layout() == 'text_block' )
		get_template_part('templates/page-builder/blocks/text-block');

	elseif ( get_row_layout() == 'image_block' )
		get_template_part('templates/page-builder/blocks/image-block');

	elseif ( get_row_layout() == 'collapse_block' )
		get_template_part('templates/page-builder/blocks/collapse-block');

	elseif ( get_row_layout() == 'tabs_block' )
		get_template_part('templates/page-builder/blocks/tabs-block');

	elseif ( get_row_layout() == 'highlight_block' )
		get_template_part('templates/page-builder/blocks/highlight-block');

	elseif ( get_row_layout() == 'html_block' )
		get_template_part('templates/page-builder/blocks/html-block');

?>
