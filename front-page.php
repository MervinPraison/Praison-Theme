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



	 

<!--
<div class="container">
	<div class="row">
	
		<div class="col-md-4 p-4" >
			<div class="fp-top p-3">
				<h2>Test</h2>
			</div>
			<div class="fp-middle p-1">
			</div>
		</div>
		<div class="col-md-4 p-4" >
			<div class="fp-top p-3">
			<h2>Test</h2>
			</div>
			<div class="fp-middle p-1">
			</div>
		</div>
		<div class="col-md-4 p-4" >
			<div class="fp-top p-3">
			<h2>Test</h2>
			</div>
			<div class="fp-middle p-1">
			</div>
		</div>
	</div>
</div>-->

 <?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>
