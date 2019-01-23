<?php use Roots\Sage\Titles; ?>

<section class="diamond custom-cursor d-flex align-items-center">

	<!-- particles.js container -->
	<div id="diamonds" class="particles-js"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="wrapper">				
					<h1><?= get_field('diamond_heading'); ?></h1>
					<?= get_field('diamond_subheading'); ?>
				</div>

			</div>
			<div class="col-md-4">
				<?php /*				
				<div class="space" onmousemove="myFunction(event)" onmouseout="clearCoor()">
					<div class="hexagon rotate scale-hover"></div>
				</div> 
				<div class="diamond-animation">
	<div class="diamond-container">
		<div class="triangle"></div>
	</div>
</div>
				*/?>

				
			</div>
		</div>
	</div>
</section>