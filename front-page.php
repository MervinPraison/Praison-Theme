<div class="container jumbotron">
	<div class="row p-3">
		<div class="col-md-6">
		<h1>Welcome to <?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>
			<?php get_search_form(); ?>
		</div>
		<div class="col-md-6">			
		</div>		
	</div>	
</div>
<!--<div class="fp-middle container">
	<div class="row p-1">		
	</div>
</div>-->
<?php if(!get_query_var('page')) : ?>
<div class="container ">
	<div class="row pt-5 px-3">
		<div class="px-3">
			<?php while (have_posts()) : the_post(); ?>
			  <?php //get_template_part('templates/page', 'header'); ?>
			  <?php get_template_part('templates/content', 'page'); ?>
			  
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php

if ( !is_active_sidebar( 'mainbar-home' ) ) { 
$content = get_the_content();
if($content){
?>

<div class="container-fluid bg-light px-10 text-light">
	<div class="row p-3">		
	  		
	</div>
</div>
<div class="container jumbotron">
	<div class="row p-3">
		<div class="col-md-6">
		<h1>Posts</h1>
		</div>
		<div class="col-md-6">			
		</div>		
	</div>	
</div>
<?php } ?>

<?php //get_template_part('templates/page', 'header'); ?>


<?php } ?>