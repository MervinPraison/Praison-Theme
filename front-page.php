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
<div class="fp-middle container">
	<div class="row p-1">		
	</div>
</div>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>

<?php //get_template_part('templates/page', 'header'); ?>
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
<?php if (!$the_query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<?php while ($the_query->have_posts()) : $the_query->the_post(); ?> 
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>


	 

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