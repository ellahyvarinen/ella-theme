<?php 
$element_id = uniqid();
?>
<div class="block-collapse">
  <?php if( have_rows('collapses') ) : ?>
    <div class="accordion" id="collapse-<?php echo $element_id; ?>">
      <?php while ( have_rows('collapses') ) : the_row(); ?>
        <?php $row_index = get_row_index(); ?>
        <div class="card">

          <div class="card-header" id="heading-<?php echo $row_index; ?>">
            <h3 class="" data-toggle="collapse" data-target="#collapse-<?php echo $row_index; ?>" aria-expanded="false"><?php the_sub_field('heading'); ?></h3>
          </div>

          <div id="collapse-<?php echo $row_index; ?>" class="collapse" aria-labelledby="heading-<?php echo $row_index; ?>" data-parent="#collapse-<?php echo $element_id; ?>">
            <div class="card-body">
              <?php the_sub_field('content'); ?>
            </div>
          </div>
          
        </div>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
</div>