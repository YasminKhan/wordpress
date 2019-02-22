	
	<input type="radio" name="radio-set" id="st-control-1"/>
		<?php if (get_theme_mod( 'wpheadr_tab1_select' )) : ?>
		<a href="#st-panel-1"><?php echo get_theme_mod( 'wpheadr_tab1_select' ) ;?></a>
		<?php else : ?>
		<a href="#st-panel-1">Banner One</a>
		<?php endif; ?>
	<input type="radio" name="radio-set" id="st-control-2"/>
		<?php if (get_theme_mod( 'wpheadr_tab2_select' )) : ?>
		<a href="#st-panel-2"><?php echo get_theme_mod( 'wpheadr_tab2_select' ) ;?></a>
		<?php else : ?>
		<a href="#st-panel-2">Banner Two</a>
		<?php endif; ?>
	<input type="radio" name="radio-set" checked="checked" id="st-control-3"/>
		<a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
    <input type="radio" name="radio-set" id="st-control-4"/>
		<?php if (get_theme_mod( 'wpheadr_tab4_select' )) : ?>
		<a href="#st-panel-4"><?php echo get_theme_mod( 'wpheadr_tab4_select' ) ;?></a>
		<?php else : ?>
		<a href="#st-panel-4">Banner Four</a>
		<?php endif; ?>
	<input type="radio" name="radio-set" id="st-control-5"/>
		<?php if (get_theme_mod( 'wpheadr_tab5_select' )) : ?>
		<a href="#st-panel-5"><?php echo get_theme_mod( 'wpheadr_tab5_select' ) ;?></a>
		<?php else : ?>
		<a href="#st-panel-5">Banner Five</a>
		<?php endif; ?>
					
				<div class="st-scroll">
					
					<section class="st-panel" id="st-panel-1">
					  <div class="container">
						<div class="row">
						    <?php if (get_theme_mod( 'wpheadr_tab1_title' )) : ?>
						        <h2><a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab1_title_link' )) ;?>">
						            <?php echo esc_html(get_theme_mod( 'wpheadr_tab1_title' )) ;?>
						        </a></h2>
						    <?php else : ?>
						        <h2>Banner One Content Title</h2>
						    <?php endif; ?>
						    <div class="span6">
						        <?php if (get_theme_mod( 'wpheadr_tab1_caption' )) : ?>
						            <p><?php echo esc_textarea(get_theme_mod( 'wpheadr_tab1_caption' )) ;?></p>
									<div class="banner-read-more button">
		                                <a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab1_title_link' )) ;?>">Read More &raquo;</a>
		                            </div>
					            <?php else : ?>
						            <p>This is a place holder dummy content which will need changing. Please visit the theme customizer to change this content under the Header Banner Options section.<br /><br />
                                    Using the textarea provided enter your custom text to replace this text, the default image, title/read more link and save. Optionally you may choose to hide the header banner altogether.</p>
									<div class="banner-read-more button"><a>Read More &raquo;</a></div>
								<?php endif; ?>
						    </div>
						
						    <?php if (get_theme_mod( 'tab1_content_image' )) : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo esc_url(get_theme_mod( 'tab1_content_image' )) ;?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php else : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo get_template_directory_uri() . '/img/globe.jpg'; ?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php endif; ?>
						
					   </div>
					 </div>
					</section>
					
					<section class="st-panel" id="st-panel-2">
					  <div class="container">
						<div class="row">
						    <?php if (get_theme_mod( 'wpheadr_tab2_title' )) : ?>
						        <h2><a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab2_title_link' )) ;?>">
						            <?php echo esc_html(get_theme_mod( 'wpheadr_tab2_title' )) ;?>
						        </a></h2>
						    <?php else : ?>
						        <h2>Banner Two Content Title</h2>
						    <?php endif; ?>
						    <div class="span6 pull-right">
						        <?php if (get_theme_mod( 'wpheadr_tab2_caption' )) : ?>
						            <p><?php echo esc_html(get_theme_mod( 'wpheadr_tab2_caption' )) ;?></p>
									<div class="banner-read-more button">
		                                <a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab2_title_link' )) ;?>">Read More &raquo;</a>
		                            </div>
					            <?php else : ?>
						            <p>This is a place holder dummy content which will need changing. Please visit the theme customizer to change this content under the Header Banner Options section.<br /><br />
                                    Using the textarea provided enter your custom text to replace this text, the default image, title/read more link and save. Optionally you may choose to hide the header banner altogether.</p>
									<div class="banner-read-more button"><a>Read More &raquo;</a></div>
								<?php endif; ?>
						    </div>
						    <?php if (get_theme_mod( 'tab2_content_image' )) : ?>
						        <div class="span6">
						            <img src="<?php echo esc_url(get_theme_mod( 'tab2_content_image' )) ;?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php else : ?>
						        <div class="span6">
						            <img src="<?php echo get_template_directory_uri() . '/img/globe.jpg'; ?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php endif; ?>
					   </div>
					 </div>
					
					</section>
					<?php if ( get_theme_mod( 'wpheadr_banner_slider_visibility' ) != 0 ) { ?>
					<section class="slider">
						    <?php get_template_part( 'slider' ); ?>
					</section>
					<?php } else { ?>
					<section class="st-panel" id="st-panel-3">
					  <div class="container">
						<div class="row">
						    <?php if (get_theme_mod( 'wpheadr_tab3_title' )) : ?>
						        <h2><a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab3_title_link' )) ;?>">
						            <?php echo esc_html(get_theme_mod( 'wpheadr_tab3_title' )) ;?>
						        </a></h2>
						    <?php else : ?>
						        <h2>Banner Three Content Title</h2>
						    <?php endif; ?>
						    <div class="span6">
						        <?php if (get_theme_mod( 'wpheadr_tab3_caption' )) : ?>
						            <p><?php echo esc_html(get_theme_mod( 'wpheadr_tab3_caption' )) ;?></p>
									<div class="banner-read-more button">
		                                <a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab3_title_link' )) ;?>">Read More &raquo;</a>
		                            </div>
					            <?php else : ?>
						            <p>This is a place holder dummy content which will need changing. Please visit the theme customizer to change this content under the Header Banner Options section.<br /><br />
                                    Using the textarea provided enter your custom text to replace this text, the default image, title/read more link and save. Optionally you may choose to hide the header banner altogether.</p>
									<div class="banner-read-more button"><a>Read More &raquo;</a></div>
								<?php endif; ?>
						    </div>
						    <?php if (get_theme_mod( 'tab3_content_image' )) : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo esc_url(get_theme_mod( 'tab3_content_image' )) ;?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php else : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo get_template_directory_uri() . '/img/globe.jpg'; ?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php endif; ?>
					    </div>
					  </div>
					</section>
					<?php } ?>
					
					<section class="st-panel" id="st-panel-4">
					  <div class="container">
						<div class="row">
						    <?php if (get_theme_mod( 'wpheadr_tab4_title' )) : ?>
						        <h2><a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab4_title_link' )) ;?>">
						            <?php echo esc_html(get_theme_mod( 'wpheadr_tab4_title' )) ;?>
						        </a></h2>
						    <?php else : ?>
						        <h2>Banner Four Content Title</h2>
						    <?php endif; ?>
						    <div class="span6 pull-right">
						        <?php if (get_theme_mod( 'wpheadr_tab4_caption' )) : ?>
						            <p><?php echo esc_html(get_theme_mod( 'wpheadr_tab4_caption' )) ;?></p>
									<div class="banner-read-more button">
		                                <a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab4_title_link' )) ;?>">Read More &raquo;</a>
		                            </div>
					            <?php else : ?>
						            <p>This is a place holder dummy content which will need changing. Please visit the theme customizer to change this content under the Header Banner Options section.<br /><br />
                                    Using the textarea provided enter your custom text to replace this text, the default image, title/read more link and save. Optionally you may choose to hide the header banner altogether.</p>
									<div class="banner-read-more button"><a>Read More &raquo;</a></div>
								<?php endif; ?>
						    </div>
						    <?php if (get_theme_mod( 'tab4_content_image' )) : ?>
						        <div class="span6">
						            <img src="<?php echo esc_url(get_theme_mod( 'tab4_content_image' )) ;?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php else : ?>
						        <div class="span6">
						            <img src="<?php echo get_template_directory_uri() . '/img/globe.jpg'; ?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php endif; ?>
					    </div>
					  </div>
					</section>
					
					<section class="st-panel" id="st-panel-5">
					  <div class="container">
						<div class="row">
							<?php if (get_theme_mod( 'wpheadr_tab5_title' )) : ?>
						        <h2><a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab5_title_link' )) ;?>">
						            <?php echo esc_html(get_theme_mod( 'wpheadr_tab5_title' )) ;?>
						        </a></h2>
						    <?php else : ?>
						        <h2>Banner Five Content Title</h2>
						    <?php endif; ?>
						    <div class="span6">
						        <?php if (get_theme_mod( 'wpheadr_tab5_caption' )) : ?>
						            <p><?php echo get_theme_mod( 'wpheadr_tab5_caption' ) ;?></p>
									<div class="banner-read-more button">
		                                <a href="<?php echo esc_url(get_theme_mod( 'wpheadr_tab5_title_link' )) ;?>">Read More &raquo;</a>
		                            </div>
					            <?php else : ?>
						            <p>This is a place holder dummy content which will need changing. Please visit the theme customizer to change this content under the Header Banner Options section.<br /><br />
                                    Using the textarea provided enter your custom text to replace this text, the default image, title/read more link and save. Optionally you may choose to hide the header banner altogether.</p>
									<div class="banner-read-more button"><a>Read More &raquo;</a></div>
								<?php endif; ?>
						    </div>
						    <?php if (get_theme_mod( 'tab5_content_image' )) : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo esc_url(get_theme_mod( 'tab5_content_image' )) ;?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php else : ?>
						        <div class="span6 pull-right">
						            <img src="<?php echo get_template_directory_uri() . '/img/globe.jpg'; ?>" class="attachment-strapvert-featured wp-post-image" alt="StrapVert" />
						        </div>
						    <?php endif; ?>
						</div>
					  </div>
					</section>

				</div><!-- // st-scroll -->
				
	