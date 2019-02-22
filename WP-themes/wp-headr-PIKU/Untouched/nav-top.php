<div class="navbar navbar-static-top">
        <div class="navbar-inner">
        <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".bottom-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
			<a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
            <!-- Our menu needs to go here -->
			<?php wp_nav_menu( array(
	           'theme_location'	 => 'primary',
			   'container_class' => 'nav-collapse bottom-collapse',
	           'menu_class'		 =>	'nav pull-right',
	           'depth'			 =>	0,
	           'fallback_cb'	 =>	false,
	           'walker'			 =>	new WPHeadR_Nav_Walker,
	           )); 
            ?>
        </div>
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar -->
