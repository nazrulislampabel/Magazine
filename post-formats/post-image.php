<?php
get_header();
?>
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-nav-area">
                        <h1 class="text-white">Gallery Post</h1>
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
                    <div class="single-post-wrap">
                        <div class="feature-img-thumb relative">
							<?php if ( class_exists( "Attachments" ) ):
								$attachments = new Attachments( "gallery" );
								if ( $attachments->exist() ):
									?>

                                    <div class="active-gallery-carusel">
										<?php while ( $attachment = $attachments->get() ): ?>
                                            <div class="single-img relative">
                                                <div class="overlay overlay-bg"></div>
												<?php echo $attachments->image("mymag-home-latest") ?>
                                            </div>
										<?php endwhile; ?>
                                    </div>
								<?php endif; ?>
							<?php endif; ?>
                        </div>
                        <div class="content-wrap">
                            <ul class="tags mt-10">
                                <li><a href="#"><?php the_tags("","","")?></a></li>
                            </ul>
                            <h3><?php the_title()?></h3>
                            <ul class="meta pb-20">
                                <li><a href="#"><span class="lnr lnr-user"></span><?php echo get_the_author()?></a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html(get_the_date())?></a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html(get_comments_number())?></a></li>
                            </ul>
							<?php echo get_the_content()?>
                            <div class="navigation-wrap justify-content-between d-flex">
								<?php
								$neuron_prev_post = get_previous_post();
								if ($neuron_prev_post):
									?>
                                    <a class="prev" href="<?php echo get_the_permalink($neuron_prev_post);?>"><span class="lnr lnr-arrow-left"></span><?php _e("Previous Post","neuron");?></a>
								<?php endif;?>
								<?php
								$neuron_next_post = get_next_post();
								if ( $neuron_next_post ):
									?>
                                    <a class="next" href="<?php echo get_the_permalink(); ?>"><?php _e("Next Post","neuron");?><span
                                                class="lnr lnr-arrow-right"></span></a>
								<?php endif;?>
                            </div>
                        </div>
						<?php
						if (!post_password_required()){
							comments_template();
						}
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
