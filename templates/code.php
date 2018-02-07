<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php 
		$value = get_post_meta(get_the_ID(), '_praison_code_url', TRUE);
		$name = 'Mervin Praison';
		if ($value) {			
		    echo praison_embed_codepen_pen($value, $name);
		}
    ?>
  </div>
</article>
