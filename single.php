<?php get_header(); ?>
<div class="site-main-container">
    <?php while (have_posts()){
        the_post();
        get_template_part("post-formats/post",get_post_format());
    }?>
</div>
<?php get_footer(); ?>