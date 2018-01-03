<header class="banner">
  <div class="container">
   	<!--<div class="row">-->
    <!--<a class="brand align-text-bottom" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <!--<span class="navbar-brand">Menu</span>-->
    <a class="brand navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
			'theme_location'    => 'primary_navigation',
			            'depth'           => 2,
        'container'       => 'div',
		//'container_id' => 'navbarNavDropdown',
        'container_class' => 'navbar nav',
        'menu_class'      => 'nav navbar-nav',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
			
		]);
      endif;
      ?>
      </div>    
    </nav>
	<!--</div>-->
  </div>
</header>
