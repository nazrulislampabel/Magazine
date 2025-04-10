<?php
/* Template Name: Archive Page */

get_header();

$mymag_latest_posts = new WP_Query(array(
	'posts_per_page'=>7,
	'ignore_sticky_posts'=>1,
	'orderby'=>"date"
));
?>
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white"><?php the_title();_e( " Post", "mymag" ); ?></h1>
                        <p class="text-white link-nav"><a href="index.html">Home </a> <span
                                    class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span
                                    class="lnr lnr-arrow-right"></span><a href="gallery-post.html">Gallery Post </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="news-tracker-wrap">
                        <?php
                        $mymag_page_meta = get_post_meta(get_the_ID('page-metabox',true));
                        echo esc_html($mymag_page_meta['page-head']);
                        echo esc_html($mymag_page_meta['page-teaser']);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title"><?php _e("Latest Category","mymag")?></h4>
	                    <?php while ($mymag_latest_posts->have_posts()){
		                    $mymag_latest_posts->the_post();
		                    ?>
                            <div class="single-latest-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
					                    <?php the_post_thumbnail("mymag-home-latest");?>
                                    </div>
                                    <ul class="tags">
                                        <li><a href=""><?php the_category(',');?></a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="<?php the_permalink();?>">
                                        <h4><?php the_title()?></h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span><?php esc_url(get_author_posts_url(get_the_author_meta("ID")))?></a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date();?></a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo get_comments_number()?></a></li>
                                    </ul>
                                    <p class="excert">
					                    <?php echo get_the_excerpt();?>
                                    </p>
                                </div>
                            </div>
		                    <?php
	                    }?>
                        <div class="load-more">
                            <a href="#" class="primary-btn">Load More Posts</a>
                        </div>
                    </div>
                    <!-- End latest-post Area -->
                </div>
				<?php get_template_part( "template-parts/common/sidebar" ) ?>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>
<?php get_footer(); ?>
