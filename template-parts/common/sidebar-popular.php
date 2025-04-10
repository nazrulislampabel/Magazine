<?php
$mymag_pp = new WP_Query( array(
	'posts_per_page'      => 3,
	'ignore_sticky_posts' => 1,
	'orderby'             => "comment_count",
) );
?>


<div class="single-sidebar-widget most-popular-widget">
    <h6 class="title">Most Popular</h6>
	<?php
	while ( $mymag_pp->have_posts() ) {
		$mymag_pp->the_post(); ?>
        <div class="single-list flex-row d-flex">
            <div class="thumb">
				<?php the_post_thumbnail( "mymag-extra-small" ) ?>
            </div>
            <div class="details">
                <a href="image-post.html">
                    <h6><?php echo get_the_title() ?></h6>
                </a>
                <ul class="meta">
                    <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php echo get_the_date() ?></a></li>
                    <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo get_comments_number() ?></a></li>
                </ul>
            </div>
        </div>
		<?php
	} ?>
</div>

