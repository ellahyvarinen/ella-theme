<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>

<?php /* Get header template */ ?>
<?php get_header(); ?>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
  <![endif]-->

  <div class="wrap" role="document">
  	<main>
  		<?php include Wrapper\template_path(); ?>
  	</main><!-- /.main -->

  	<?php if (Setup\display_sidebar()) : ?>
  		<aside class="sidebar">
  			<?php include Wrapper\sidebar_path(); ?>
  		</aside><!-- /.sidebar -->
  	<?php endif; ?>
    
  </div><!-- /.wrap -->

  <?php /* Get footer template */ ?>
  <?php get_footer(); ?>