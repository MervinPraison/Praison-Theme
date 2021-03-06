<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php 
  	get_template_part('templates/code', ''); 
  ?>
<?php endwhile; ?>
<div class="clearfix"></div>
<nav aria-label="Page navigation example">
<?php
  if ( function_exists('bootstrap_pagination') )
    bootstrap_pagination();
?>
</nav>
