<?php
$mymag_latest_posts = new WP_Query(array(
   'posts_per_page'=>4,
   'ignore_sticky_posts'=>1,
   'orderby'=>"date"
));

?>

<!-- Start latest-post Area -->
<div class="latest-post-wrap">
    <h4 class="cat-title">Latest News</h4>
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
                    <li><a href="#">Lifestyle</a></li>
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
</div>
<!-- End latest-post Area -->
