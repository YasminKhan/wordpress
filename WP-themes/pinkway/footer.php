<!--Start Footer container-->
<div class="container_24 footer-container">
    <div class="grid_24 footer">
        <?php
        /* A sidebar in the footer? Yep. You can can customize
         * your footer with four columns of widgets.
         */
        get_sidebar('footer');
        ?>
    </div>
    <div class="clear"></div>
</div>
<!--End footer container-->
<!--Start footer navigation-->
<div class="container_24 footer-navi">
    
            <div class="navigation">
                <ul class="footer_des">
                    <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?> -
                            <?php bloginfo('description'); ?> 
                            <?php _e('(C) YasminShamsudin.com', 'colorway'); ?>

                        </a>
                </ul>                
            </div>
        </div></div>
        
    <div class="clear"></div>
</div>
<!--End Footer navigation-->
<div class="footer_space"></div>
<?php wp_footer(); ?>
</body></html>