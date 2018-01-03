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

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  
<?php endwhile; ?>

<?php //get_template_part('templates/page', 'header'); ?>
<?php $fp_query = new WP_Query( 'posts_per_page=5' ); ?>
<?php if (!$fp_query->have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
<?php endif; ?>

<div class="container ">
	<div class="row p-3">
		<div class="col-md-8">

			<?php while ($fp_query->have_posts()) : $fp_query->the_post(); ?> 

			<article <?php post_class(); ?>>
			  <header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php get_template_part('templates/entry-meta'); ?>
			  </header>
			  <div class="entry-summary">
				<?php the_excerpt(); ?>
			  </div>
			</article>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
			<ul>
				<?php echo wp_tag_cloud(); ?>
			</ul>
			<ul>
				<?php wp_list_categories( array(
					'orderby'    => 'name',
					'show_count' => false,
					'title_li' => ''
	
				) ); ?> 
			</ul>
		</div>
	</div>
</div>