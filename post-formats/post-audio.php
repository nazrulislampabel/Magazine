<?php
get_header();

$philosophy_audio_file = "";
if(function_exists("the_field")){
    $philosophy_audio_file = get_field("source_file");
}
?>
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white">Audio Post</h1>
                        <p class="text-white link-nav"><a href="index.html">Home </a> <span
                                    class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span
                                    class="lnr lnr-arrow-right"></span><a href="gallery-post.html">Gallery Post </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="news-tracker-wrap">
                        <h6><span>Breaking News:</span> <a href="#">Astronomy Binoculars A Great Alternative</a>
                        </h6>
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

                    <!-- Start single-post Area -->
                    <div class="feature-img-thumb relative">
	                    <?php if($philosophy_audio_file): ?>
                            <audio controls>
                                <source src="<?php echo esc_url($philosophy_audio_file);?>" type="audio/ogg">
                                <source src="<?php echo esc_url($philosophy_audio_file);?>" type="audio/mpeg">
                            </audio>
	                    <?php
	                    endif;
	                    ?>
                    </div>
                    <!-- End single-post Area -->
                </div>
	            <?php get_template_part("template-parts/common/sidebar")?>
            </div>
        </div>
    </section>
    <!-- End latest-post Area -->
</div>
<?php get_footer(); ?>

