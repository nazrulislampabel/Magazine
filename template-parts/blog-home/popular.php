<?php
$mymag_pp = new WP_Query(array(
	'posts_per_page'=>3,
	'ignore_sticky_posts'=>1,
	'orderby'=>"comment_count",
));
$popular_information = array();
while ($mymag_pp->have_posts()){
	$mymag_pp->the_post();
	$categories = get_the_category();
	$popular_information[] = array(
		"title" => get_the_title(),
		"permalink" => get_the_permalink(),
		"date" => get_the_date(),
		"comments" => get_comments_number(),
        "content"=> get_the_excerpt(),
		"thumbnail" => get_the_post_thumbnail_url(get_the_ID(),"home-square"),
		"author" => get_the_author_meta("display_name"),
		"author_avatar" => get_avatar_url(get_the_author_meta("ID")),
		"cat" => $categories[mt_rand(0,count($categories)-1)]->name,
        "tag"=>get_the_tag_list(),
        "tag_url"=>get_tag_link($tag),
	);
}

if ($mymag_pp->post_count > 1):

?>
 <!-- Start popular-post Area -->
<div class="popular-post-wrap">
    <h4 class="title">Popular Posts</h4>
    <div class="feature-post relative">
        <div class="feature-img relative">
            <div class="overlay overlay-bg"></div>
            <img class="img-fluid" src="<?php echo esc_url($popular_information[0]['thumbnail'])?>" alt="">
        </div>
        <div class="details">
            <ul class="tags">
                <li><a href="#"><?php echo $popular_information[0]['tag']?></a></li>
            </ul>
            <a href="image-post.html">
                <h3><?php echo esc_html($popular_information[0]['title'])?></h3>
            </a>
            <ul class="meta">
                <li><a href="#"><span class="lnr lnr-user"></span><?php echo esc_html($popular_information[0]['author'])?></a></li>
                <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html($popular_information[0]['date'])?></a></li>
                <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html($popular_information[0]['comments'])?></a></li>
            </ul>
        </div>
    </div>
    <div class="row mt-20 medium-gutters">
	    <?php
	    for ( $i = 1; $i < 3; $i ++ ):
	    ?>
        <div class="col-lg-6 single-popular-post">
                <div class="feature-img-wrap relative">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="<?php echo esc_url($popular_information[$i]['thumbnail'])?>" alt="">
                    </div>
                    <ul class="tags">
                        <li><a href="<?php echo esc_url($popular_information[$i]['tag_url'])?>"><?php echo $popular_information[$i]['tag']?></a></li>
                    </ul>
                </div>
                <div class="details">
                    <a href="<?php echo esc_url($popular_information[$i]['permalink'])?>">
                        <h4><?php echo esc_html($popular_information[$i]['title'])?></h4>
                    </a>
                    <ul class="meta">
                        <li><a href="#"><span class="lnr lnr-user"></span><?php echo esc_html($popular_information[$i]['author'])?></a></li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo esc_html($popular_information[$i]['date'])?></a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo esc_html($popular_information[$i]['comments'])?></a></li>
                    </ul>
                    <p class="excert">
                        <?php echo ($popular_information[$i]['content'])?>
                    </p>
                </div>
        </div>
	    <?php
	    endfor;
	    ?>
    </div>
</div>
<!-- End popular-post Area -->
<?php endif;?>