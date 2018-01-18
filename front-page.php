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
<div class="container ">
	<div class="row p-3">
		<div class="col-md-8">
			<div class="clearfix"></div>
			<?php if ( is_active_sidebar( 'mainbar-home' ) ) { ?>				
				<?php dynamic_sidebar( 'mainbar-home' ); ?>				
			<?php }else{ ?>
			<!-- Loop Start -->
				<?php 
					if(get_query_var('page')) {
						$paged = get_query_var('page');	
					}elseif(get_query_var('paged')){
						$paged = get_query_var('paged');
					}else{
						$paged = 1;
					}
					$fp_query = new WP_Query( 'posts_per_page=4&paged='.$paged ); 
				?>
			<!-- Query End -->	
				<?php if (!$fp_query->have_posts()) : ?>
				  <div class="alert alert-warning">
				    <?php _e('Sorry, no results were found.', 'sage'); ?>
				  </div>
				<?php endif; ?>
			<h2>Posts</h2>
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
			<!-- Loop Ends -->
			<?php } ?>
		</div>
		<div class="col-md-4">
			<div class="clearfix"></div>
			<?php if ( is_active_sidebar( 'sidebar-secondary' ) ) { ?>
				
				<?php dynamic_sidebar( 'sidebar-secondary' ); ?>
				
			<?php }else{ ?>
			<h3>Tags</h3>
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
			<?php } ?>
		</div>
	</div>
</div>