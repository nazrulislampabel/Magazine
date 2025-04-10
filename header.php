<!DOCTYPE html>
<html lang="zxx" class="no-js" <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>
<body>
<header>
<?php $options = get_option( 'mymag_options' ); // unique id of the framework
?>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-left no-padding">
                    <ul>
	                    <?php if (is_active_sidebar("sidebar-2")){
		                    dynamic_sidebar("sidebar-2");
	                    }?>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 header-top-right no-padding">
	                <ul>
                        <li><a href="tel:+440 012 3654 896"><span class="lnr lnr-phone-handset"></span><span><?php echo $options['header_right_number'];?></span></a></li>
                        <li><a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span><span><?php echo $options['header_email'];?></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-wrap">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
                    <?php
                    if (has_custom_logo()){
                        the_custom_logo();
                    }else{
                        echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                    }
                    ?>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/banner-ad.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part("template-parts/common/navigation")?>
</header>
