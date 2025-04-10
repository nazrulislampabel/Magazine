
<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4><?php _e('Product','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-left',
                    'menu_id'        => 'footerleft',
                    'menu_class'     => '',
                ) );
                ?>

            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Quick Links','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-middle',
                    'menu_id'        => 'footermiddle',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Features','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-right',
                    'menu_id'        => 'footerright',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4><?php _e('Resource','mymag')?></h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer-resource',
                    'menu_id'        => 'footerresource',
                    'menu_class'     => '',
                ) );
                ?>
            </div>
            <div class="col-lg-3 col-md-6 single-footer-widget">
                <h4>Instragram Feed</h4>
	                <?php if (is_active_sidebar("instagram")){
		                dynamic_sidebar("instagram");
	                }?>
            </div>
        </div>
        <div class="footer-bottom row align-items-center">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <?php if (is_active_sidebar("bottom-section")){
                    dynamic_sidebar("bottom-section");
                }?>
            <div class="col-lg-4 col-md-12 footer-social">
		        <?php if (is_active_sidebar("sidebar-2")){
			        dynamic_sidebar("sidebar-2");
		        }?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>