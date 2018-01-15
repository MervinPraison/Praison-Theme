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

<?php //get_template_part('templates/page', 'header'); ?>
<?php 
	if(get_query_var('page')) {
		$paged = get_query_var('page');	
	}elseif(get_query_var('paged')){
		$paged = get_query_var('paged');
	}else{
		$paged = 1;
	}
	$fp_query = new WP_Query( 'posts_per_page=5&paged='.$paged ); 
?>
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
			<br />
			<ul class="pagination">
				<?php if( get_previous_posts_link('&laquo; PREV', $fp_query->max_num_pages) ) { ?> <li class='page-item'><span class='page-link'><?php previous_posts_link( '&laquo; Newer Posts', $fp_query->max_num_pages) ?></span></li><?php } ?>
				<?php if( get_next_posts_link('NEXT &raquo;', $fp_query->max_num_pages) ) { ?> <li class='page-item'><span class='page-link'><?php next_posts_link( 'Older Posts &raquo;', $fp_query->max_num_pages) ?></span></li><?php } ?>
			</ul>

		</div>
		<div class="col-md-4">
			<div class="clearfix"></div>
			<?php echo wp_tag_cloud(); ?>			
			<div class="clearfix"></div>
			<br />
			<h2>Categories</h2>
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