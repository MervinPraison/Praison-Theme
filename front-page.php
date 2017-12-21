<div class="fp-top container">
	<div class="row p-3">
		<div class="col-md-6">
			<?php get_search_form(); ?>
		</div>
		<div class="col-md-6">			
		</div>
		
	</div>
	
	
</div>
<div class="fp-middle container">
	<div class="row p-1">		
	</div>
</div>
 

 <?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>
