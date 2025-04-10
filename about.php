<?php
/* Template Name: About Page */
get_header();

$services = get_post_meta(get_the_ID(),"_mymag_service",true);
$mymag_page_meta = get_post_meta( get_the_ID(), 'my_page_metabox',true);
$image = get_post_meta( get_the_ID(), 'client_img', true );
?>

<!-- Start top-post Area -->
<section class="top-post-area pt-10">
    <div class="container no-padding">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-nav-area">
                    <h1 class="text-white"><?php the_title(); ?></h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span
                                class="lnr lnr-arrow-right"></span><a href="#">Post Types </a><span
                                class="lnr lnr-arrow-right"></span><a href="gallery-post.html">Gallery Post </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End top-post Area -->
<!-- Start service Area -->
<section class="service-area section-gap">
    <div class="container">
        <div class="row">
	        <?php foreach ( $services as $service ):
                $mymag_service_icon = $service['_mymag_icon'];
		        ?>
                <div class="col-lg-4">
                    <div class="single-service d-flex flex-row">
                        <div class="icon">
                            <span class="<?php echo esc_attr($mymag_service_icon); ?>"></span>
                        </div>
                        <div class="details">
                            <h4>
                                <?php echo esc_html($service['_mymag_title'])?>
                            </h4>
                            <?php echo apply_filters("the_content",$service['_mymag_content']);?>
                        </div>
                    </div>
                </div>
	        <?php
	        endforeach;
	        ?>
        </div>
    </div>
</section>
<!-- End service Area -->
<!-- Start info Area -->
<section class="info-area section-gap relative">
    <div class="container">
        <div class="row align-items-center justify-content-end">
            <?php $options = get_option( 'mymag_options' ); // unique id of the framework ?>
            <div class="col-lg-6 no-padding info-right">
                <h1>
                    <?php echo $options['info_title'];?>
                </h1>
	            <p><?php echo $options['info_sub_title'];?></p>
                <div class="row no-gutters">
                    <?php
                    $single_services =$options['single_service'];
                    foreach ($single_services as $single_service){
                        ?>
                        <div class="single-services col">
                            <span class="<?php echo $single_service['single_service_icon'];?>"></span>
                                <h4><?php echo $single_service['single_service_title'];?></h4>
                            <p>
	                            <?php echo $single_service['single_service_des'];?></p>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End info Area -->

<!-- Start feedback Area -->
<section class="feedback-area section-gap" id="feedback">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10"><?php echo $options['feedback_tittle'];?></h1>
                <p>
                    <?php echo $options ['feedback_sub_tittle']?>
                </p>
            </div>
        </div>
        <div class="row feedback-contents justify-content-between align-items-center">
            <div class="col-lg-6 feedback-left">
                <div class="mn-accordion" id="accordion">
                    <!--Accordion item-->
		            <?php
		            $about_accordions = $options['feedback'];
		            foreach ( $about_accordions as $about_accordion ) {
			            ?>
                        <div class="accordion-item">
                            <div class="accordion-heading">
                                <h3><?php echo $about_accordion['feedback'];?></h3>
                                <div class="icon">
                                    <i class="lnr lnr-chevron-right"></i>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <?php echo $about_accordion['feedback_des'];?>
                            </div>
                        </div>
			            <?php
		            }
		            ?>
                    <!--Accordion item-->
                </div>
            </div>
            <div class="col-lg-5 feedback-right relative d-flex justify-content-center align-items-center">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid" src="phpassets/img/play-btn.png" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End feedback Area -->

<!-- Start testimonial Area -->
<section class="testimonial-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10"><?php echo $options['testimonial_tittle'];?></h1>
                    <p><?php echo $options['testimonial_sub_tittle'];?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial">
		        <?php
                $about_testimonials = $options['single_testimonial'];
                foreach ( $about_testimonials as $about_testimonial ) {
			        ?>
                    <div class="single-testimonial item d-flex flex-row">
                        <div class="thumb">
                            <img class="img-fluid"
                                 src="<?php if ( $image ) {
                                     echo wp_get_attachment_image( $image, 'mymag-test-small' );
                                     print_r($image);
                                 } ?>" alt="">
                        </div>
                        <div class="desc">
	                        <p><?php echo $about_testimonial['client_fed']?></p>
                            <h4><?php echo $about_testimonial['client_name']?></h4>
                            <p><?php echo $about_testimonial['client_pos']?></p>
                        </div>
                    </div>
			        <?php
		        }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial Area -->
    <!-- Start brands Area -->
    <section class="brands-area pb-60 pt-60">
        <div class="container no-padding">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <?php $brands = $options['single_brands'];
                    foreach ($brands as $brand){
                        ?>
                        <div class="col single-brand">
                            <a href="#"><img class="mx-auto" src="<?php echo $brand['brand_img'];?>" alt=""></a>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->
<?php get_footer(); ?>