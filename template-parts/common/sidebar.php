<div class="col-lg-4">
	<div class="sidebars-area">
		<?php get_template_part("template-parts/common/sidebar-editor")?>
        <div class="single-sidebar-widget ads-widget">
			<img class="img-fluid" src="<?php echo get_template_directory_uri()?>/assets/img/sidebar-ads.jpg" alt="">
		</div>
		<div class="single-sidebar-widget newsletter-widget">
			<h6 class="title">Newsletter</h6>
			<p>
				Here, I focus on a range of items
				andfeatures that we use in life without
				giving them a second thought.
			</p>
			<div class="form-group d-flex flex-row">
				<div class="col-autos">
					<div class="input-group">
						<input class="form-control" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" type="text">
					</div>
				</div>
				<a href="#" class="bbtns">Subcribe</a>
			</div>
			<p>
				You can unsubscribe us at any time
			</p>
		</div>
		<?php get_template_part("template-parts/common/sidebar-popular")?>
		<div class="single-sidebar-widget social-network-widget">
			<h6 class="title"><?php _e("Social Networks","mymag")?></h6>
            <?php if (is_active_sidebar("social-network")){
				dynamic_sidebar("social-network");
			}?>
		</div>
	</div>
</div>