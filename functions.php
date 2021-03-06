<?php
require_once get_theme_file_path("/inc/tgm.php");
require_once get_theme_file_path("/widgets/social-icons-widget.php");


if (site_url()== "http://demo.lwhh.com"){
    define("VERSION",time());
}else{
    define("VERSION",wp_get_theme()->get("version"));
}


function mymag_theme_setup() {
    load_theme_textdomain( "mymag", get_theme_file_path( "/languages" ) );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-logo" );
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "topmenu", __( "Top Menu", "mymag" ) );
    register_nav_menus( array(
        "footer-left"   => __( "Footer Left Menu", "mymag" ),
        "footer-middle" => __( "Footer Middle Menu", "mymag" ),
        "footer-right"  => __( "Footer Right Menu", "mymag" ),
        "footer-resource"  => __( "Footer Resource Menu", "mymag" ),
    ) );
    add_image_size( "mymag-home-square", 750, 439, true );
    add_image_size( "mymag-home-latest", 263, 180, true );
}
add_action( "after_setup_theme", "mymag_theme_setup" );
function mymag_assets() {
    wp_enqueue_style( "google-fonts-css", "//fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet" );
    wp_enqueue_style( "linearicons-css", get_theme_file_uri( "/assets/css/linearicons.css" ), null, "1.0" );
    wp_enqueue_style( "font-awesome-css", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ), null, "1.0" );
    wp_enqueue_style( "magnific-css", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "nice-css", get_theme_file_uri( "/assets/css/nice-select.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-css", get_theme_file_uri( "/assets/css/owl.carousel.css" ), null, "1.0" );
    wp_enqueue_style( "jquery-css", get_theme_file_uri( "/assets/css/jquery-ui.css" ), null, "1.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, "1.0" );
    wp_enqueue_style( "mymag-css", get_stylesheet_uri(), null,1.0 );


    wp_enqueue_script( 'magnific.min.js', "//code.jquery.com/jquery-3.3.1.min.js");
    wp_enqueue_script( 'magnific.min.js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/assets/js/vendor/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'maps.js', "//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script( 'easing.min.js', get_template_directory_uri().'/assets/js/easing.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'hoverIntent.js', get_template_directory_uri().'/assets/js/hoverIntent.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'superfish.min.js', get_template_directory_uri().'/assets/js/superfish.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.ajaxchimp.min.js', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'mn-accordion.js', get_template_directory_uri().'/assets/js/mn-accordion.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery-ui.js', get_template_directory_uri().'/assets/js/jquery-ui.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'jquery.nice-select.min.js', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'mail-script.js', get_template_directory_uri().'/assets/js/mail-script.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'main.js', get_template_directory_uri().'/assets/js/main.js', array('jquery'),'1.0',true);

    if ( is_singular() ) {
        wp_enqueue_script( "comment-reply" );
    }
}
add_action( "wp_enqueue_scripts", "mymag_assets" );
function mymag_sidebar(){
register_sidebar(
    array(
        'name'          => __( 'Home sidebar', 'theme_text_domain' ),
        'id'            => 'sidebar',    // ID should be LOWERCASE  ! ! !
        'description'   => 'right_sidebar',
        'class'         => 'custom class',
        'before_widget' => '<div id="%1$s" class="single-sidebar-widget most-popular-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title" style="font-size: 14px">',
        'after_title'   => '</h2>',
    )
);

    register_sidebar(
        array(
            'name'          => __( 'Home sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar',    // ID should be LOWERCASE  ! ! !
            'description'   => 'right_sidebar',
            'class'         => 'custom class',
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget most-popular-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="title" style="font-size: 14px">',
            'after_title'   => '</h2>',
        )
    );
}
add_action("widgets_init","mymag_sidebar");