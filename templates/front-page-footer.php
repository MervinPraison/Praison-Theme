<?php if(is_front_page()) : ?>
<?php if ( is_active_sidebar( 'mainbar-home' ) ) {  ?>
<footer class="content-info">
	<br /><br /><br /><br /><br /><br /><br />
</footer>
<?php } ?>
<div class="container ">
	<div class="row p-3">
		<div class="col-md-8">
			<div class="clearfix"></div>
			<?php //global $paged;global $page;?>
			<?php if ( is_active_sidebar( 'mainbar-home' ) ) { ?>				
				<?php dynamic_sidebar( 'mainbar-home' ); ?>				
			<?php }else{ ?>
			<!-- Loop Start -->
			<?php  global $paged; ?>
				<?php 
					if(get_query_var('page')) {
						$paged = get_query_var('page');
					}elseif(get_query_var('paged')){
						$paged = get_query_var('paged');
					}else{
						$paged = 1;
					}
					$fp_query = new WP_Query( 'posts_per_page=20&paged='.$paged ); 
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

			<?php
			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?page=%#%',
				'current' => max( 1, $paged ),
				'mid_size' => 6,
				'total' => $fp_query->max_num_pages
			) );
			?>
			
			<?php wp_reset_query();  ?>
			<?php wp_reset_postdata(); ?>
			
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
<?php endif; ?>
