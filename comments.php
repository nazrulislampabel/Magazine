<div class="comment-sec-area">
    <div class="container">
        <div class="row flex-column">
            <h6>05 Comments</h6>
	        <?php
	        wp_list_comments( array(
		        'callback' => 'custom_comments_markup',  // Custom callback function for comments
		        'max_depth' => 3,  // Max nesting level for replies
	        ) );
	        ?>

        </div>
    </div>
</div>
</div>
<div class="comment-form">
	<?php
	$my_comment_fields = array();

	// Name Field
	$my_comment_fields['author'] = <<<EOD
<div class="form-group form-inline">
    <div class="form-group col-lg-6 col-md-12 name">
        <input type="text" name="author" class="form-control" id="name" placeholder="Enter Name"
               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
    </div>
EOD;

	// Email Field
	$my_comment_fields['email'] = <<<EOD
    <div class="form-group col-lg-6 col-md-12 email">
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address"
               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
    </div>
</div>
EOD;

	// Website (URL) Field
	$my_comment_fields['url'] = <<<EOD
<div class="form-group">
    <input type="text" name="url" class="form-control" id="website" placeholder="Website"
           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Website'">
</div>
EOD;

	// Comment Textarea
	$my_comment_field = <<<EOD
<div class="form-group">
    <textarea class="form-control mb-10" rows="5" id="comment" name="comment"
              placeholder="Message" onfocus="this.placeholder = ''"
              onblur="this.placeholder = 'Message'" required></textarea>
</div>
EOD;

	// Submit Button
	$my_comment_submit_button = <<<EOD
<button type="submit" class="primary-btn text-uppercase">Post Comment</button>
EOD;

	// Full Comment Form Arguments
	$my_comment_field_arguments = array(
		'fields'               => $my_comment_fields,
		'comment_field'        => $my_comment_field,
		'submit_button'        => $my_comment_submit_button,
		'id_form'=>'commentform',
		'comment_notes_before' => '',
		'comment_notes_after'  => ''
	);

	// Render Comment Form
	comment_form($my_comment_field_arguments);
	?>
</div>
