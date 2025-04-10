<?php
$mymag_ep  = new WP_Query(
	array(
		'meta_key' =>'editor_pick',
		'meta_value' =>'1',
		'posts_per_page' =>'4',
	)
);
$post_data = array();
while ($mymag_ep->have_posts()){
	$mymag_ep->the_post();
	$categories = get_the_category();
	$post_data[] = array(
		"title" => get_the_title(),
		"permalink" => get_the_permalink(),
		"date" => get_the_date(),
		"comments" => get_comments_number(),
		"thumbnail" => get_the_post_thumbnail_url(get_the_ID(),"large"),
		"author" => get_the_author_meta("display_name"),
		"author_avatar" => get_avatar_url(get_the_author_meta("ID")),
		"cat" => $categories[mt_rand(0,count($categories)-1)]->name,
        "excerpt"=> get_the_excerpt(),
        'small_img'=> get_the_post_thumbnail_url(get_the_ID(),"mymag-extra-small"),
	);
}

if ($mymag_ep->post_count > 1):

?>
<div class="single-sidebar-widget editors-pick-widget">
	<h6 class="title">Editor’s Pick</h6>
	<div class="editors-pick-post">
		<div class="feature-img-wrap relative">
			<div class="feature-img relative">
				<div class="overlay overlay-bg"></div>
				<img class="img-fluid" src="<?php echo esc_url($post_data[0]['thumbnail'])?>" alt="">
			</div>
			<ul class="tags">
				<li><a href="#"><?php echo esc_html($post_data[0]['cat'])?></a></li>
			</ul>
		</div>
		<div class="details">
			<a href="<?php echo esc_url( $post_data[0]['permalink'] ) ?>">
                <h4 class="mt-20"><?php echo esc_html( $post_data[0]['title'] ) ?></h4>
            </a>
            <ul class="meta">
                <li><a href="<?php echo esc_url( $post_data[0]['permalink'] ) ?>"><span
                                class="lnr lnr-user"></span></a><?php echo esc_html( $post_data[0]['author'] ) ?></li>
                <li><a href="#"><span
                                class="lnr lnr-calendar-full"></span><?php echo esc_html( $post_data[0]['date'] ) ?></a>
                </li>
                <li><a href="#"><span
                                class="lnr lnr-bubble"></span> <?php echo esc_html( $post_data[0]['comments'] ) ?> <?php _e( "comments", "mymag" ) ?>
                    </a></li>
            </ul>
            <p class="excert">
	            <?php echo esc_html( $post_data[0]['excerpt'] ) ?>
            </p>
		</div>
		<div class="post-lists">
			<?php
			for ( $i = 1; $i < 4; $i ++ ):
				?>
                <div class="single-post d-flex flex-row">
                    <div class="thumb">
                        <img src="<?php echo esc_url($post_data[$i]['small_img'])?>" alt="">
                    </div>
                    <div class="detail">
                        <a href="image-post.html"><h6><?php echo esc_html( $post_data[$i]['title'] ) ?></h6></a>
                        <ul class="meta">
                            <li><a href="<?php echo esc_url( $post_data[$i]['permalink'] ) ?>"><span
                                            class="lnr lnr-user"></span></a><?php echo esc_html( $post_data[$i]['author'] ) ?></li>
                            <li><a href="#"><span
                                            class="lnr lnr-calendar-full"></span><?php echo esc_html( $post_data[$i]['date'] ) ?></a>
                            </li>
                            <li><a href="#"><span
                                            class="lnr lnr-bubble"></span> <?php echo esc_html( $post_data[$i]['comments'] ) ?> <?php _e( "comments", "mymag" ) ?>
                                </a></li>
                        </ul>
                    </div>
                </div>
			<?php
			endfor;
			?>
        </div>
    </div>
</div>
<?php endif; ?>