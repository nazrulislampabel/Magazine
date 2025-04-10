<div class="container main-menu" id="main-menu">
    <div class="row align-items-center justify-content-between">
        <nav id="nav-menu-container">
	        <?php
	        $myMag_menu =
		        wp_nav_menu( array(
			        'location'        => 'primary',
			        'menu_id'         => 'primary',
			        'menu_class'      => 'nav-menu',
			        'echo'=>false
		        ) );
	        $myMag_menu = str_replace("sub-menu","sub-menu menu-has-children",$myMag_menu);
	        echo $myMag_menu;
	        ?>
        </nav><!-- #nav-menu-container -->
        <div class="navbar-right">
            <?php get_search_form()?>
        </div>
    </div>
</div>