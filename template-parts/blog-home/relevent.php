<div class="relavent-story-post-wrap mt-30">
    <h4 class="title"><?php _e("Relevent  News","mymag")?></h4>

    <?php
    $mymag_latest_post = new WP_Query(array(
        'posts_per_page' =>3,
        'ignore_sticky_posts' =>1,
        'orderby' =>"date",
        'order' =>"dec",
    ));
    while ($mymag_latest_post->have_posts()) {
        $mymag_latest_post->the_post();
        ?>

        <div class="relavent-story-list-wrap">
            <div class="single-relavent-post row align-items-center">
                <div class="col-lg-5 post-left">
                    <div class="feature-img relative">
                        <div class="overlay overlay-bg"></div>
                        <?php the_post_thumbnail("mymag-home-latest") ?>
                    </div>
                    <ul class="tags">
                        <li><a href="<?php ?>"><?php echo the_category()?></a></li>
                    </ul>
                </div>
                <div class="col-lg-7 post-right">
                    <a href="<?php echo get_the_permalink()?>">
                        <h4><?php echo get_the_title() ?></h4>
                    </a>
                    <ul class="meta">
                        <li><a href="<?php esc_url(get_author_posts_url(get_the_author_meta("ID")))?>"><span class="lnr lnr-user"></span><?php the_author() ?></a></li>
                        <li><a href="#"><span class="lnr lnr-calendar-full"></span><?php the_date() ?></a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span><?php echo comments_number()?></a></li>
                    </ul>
                    <p class="excert">
                        <?php the_excerpt() ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>