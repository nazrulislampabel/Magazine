
<?php
require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path("/inc/attachments.php");
require_once get_theme_file_path( '/inc/cmb2-mb.php' );
require_once get_theme_file_path( '/inc/mymag-options.php' );
require_once get_theme_file_path("/widgets/social-icons-widgets.php");


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
	register_nav_menu( 'primary', esc_html__( 'Main Menu', 'mymag' ) );
    register_nav_menus( array(
        "footer-left"   => __( "Footer Left Menu", "mymag" ),
        "footer-middle" => __( "Footer Middle Menu", "mymag" ),
        "footer-right"  => __( "Footer Right Menu", "mymag" ),
        "footer-resource"  => __( "Footer Resource Menu", "mymag" ),
    ) );
    add_image_size( "mymag-home-square", 750, 439, true );
    add_image_size( "mymag-home-latest", 263, 180, true );
    add_image_size( "mymag-extra-small", 100, 80, true );
    add_image_size( "mymag-extra-large", 690, 300, true );
    add_image_size( "mymag-test-small", 50, 50, true );
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
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, time() );
    wp_enqueue_style( "mymag-css", get_stylesheet_uri(), null,time());


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
        'name'          => __( 'header-contact', 'mymag' ),
        'id'            => 'header-contact',    // ID should be LOWERCASE  ! ! !
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
		'name'          => __( 'instagram', 'mymag' ),
		'id'            => 'instagram',    // ID should be LOWERCASE  ! ! !
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
            'name'          => __( 'sidebar-2', 'mymag' ),
            'id'            => 'sidebar-2',    // ID should be LOWERCASE  ! ! !
            'description'   => 'right_sidebar',
            'class'         => 'custom class',
            'before_widget' => '<div id="%1$s" class="single-sidebar-widget most-popular-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
	register_sidebar( array(
		'name'          => __( 'Bottom Section', 'mymag' ),
		'id'            => 'bottom-section',
		'description'   => __( 'Widgets in this area will be shown on footer section.', 'mymag' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Social-network', 'mymag' ),
		'id'            => 'social-network',
		'description'   => __( 'Widgets in this area will be shown on footer section.', 'mymag' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Newsletter', 'mymag' ),
		'id'            => 'Newsletter',
		'description'   => __( 'Widgets in this area will be shown on footer section.', 'mymag' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
}
add_action("widgets_init","mymag_sidebar");

function mymag_search_form(){
	$homedir = home_url("/");
	$newform = <<<FORM
<form class="Search" action="{$homedir}">
                <input type="text" class="form-control Search-box" name="Search-box" id="Search-box"
                       placeholder="Search">
                <label for="Search-box" class="Search-box-label">
                    <span class="lnr lnr-magnifier"></span>
                </label>
                <span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
            </form>
FORM;
return $newform;
}
add_filter("get_search_form","mymag_search_form");

function mymag_comment_form($fields){
	$comment_fields = $fields ['comment'];
	unset($fields['comment']);
	$fields['comment'] = $comment_fields;
	$cookies_fields = $fields ['cookies'];
	unset($fields['cookies']);
	$fields['cookies'] = $cookies_fields;
	return $fields;
}
add_filter('comment_form_fields','mymag_comment_form');

function custom_comments_markup($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';  // <div> অথবা <li> টাইপ চেক

	// depth অনুযায়ী left-padding ক্লাস যোগ
	$left_padding_class = ($depth > 1) ? 'left-padding' : '';  // যদি depth 1 এর বেশি হয়, তাহলে left-padding ক্লাস যোগ হবে

	?>
    <<?php echo $tag; ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent'); ?> id="comment-<?php comment_ID(); ?>" class="<?php echo $left_padding_class; ?>">
    <div class="single-comment justify-content-between d-flex">
        <div class="user justify-content-between d-flex">
            <div class="thumb">
				<?php echo get_avatar( $comment, 'mymag-test-small' ); ?>  <!-- কমেন্টারের অ্যাভাটার -->
            </div>
            <div class="desc">
                <h5><a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a></h5>
                <p class="date">
					<?php printf( esc_html__( '%1$s at %2$s', 'your-textdomain' ), get_comment_date(), get_comment_time() ); ?>
                </p>
                <p class="comment">
					<?php comment_text(); ?>  <!-- কমেন্ট টেক্সট -->
                </p>
            </div>
        </div>
        <div class="reply-btn">
			<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
    </div>
    </<?php echo $tag; ?>>
	<?php
}



