<?php while (have_posts()) : the_post(); ?> 
 <?php if ( function_exists('wps_mervin_breadcrumb_bootstrap') ) {
	wps_mervin_breadcrumb_bootstrap();
} ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="container">
      	<div class="row">      	
      		<div class="col-sm-8 nopadding">
      			<?php get_template_part('templates/entry-meta'); ?>			
      		</div>
      		<div class="col-sm-4 nopadding">
      			<div class="socialmedia-share pb-3 ">
				<span class="">Share on </span>
					<?php
					$socialURL = urlencode(get_permalink());

					$socialTitle = str_replace( ' ', '%20', get_the_title());

					//$socialThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

					$twitterURL = 'https://twitter.com/intent/tweet?text='.$socialTitle.'&amp;url='.$socialURL;
					$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$socialURL;

					echo '<a href="'.$twitterURL.'" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;';

					echo '<a href="'.$facebookURL.'" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>';
					?>
				</div>
      		</div>
      	</div>      	
      </div>
      
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>    
    <br />
    <footer>
    
	<?php $tags = get_the_tags($post->ID); 
	if($tags){
		echo '<h3>Tags</h3>';
		foreach($tags as $tag) :  ?> 
			<a class="btn btn-outline-info"
				href="<?php echo get_tag_link($tag->term_id);?>">
					  <?php print_r($tag->name); ?>
			 </a> 
		 <?php endforeach; 
		 echo '<br /><br />';
	} ?>
	
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>