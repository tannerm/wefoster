<div class="wf-admin-intro wf-admin-box">
	Want to stay up to date about everything that is happening in the world of BuddyPress? Our community newsletter is sent out bi-weekly and contains a
	carefully curated collection of news, articles and resources that are useful for those who are building their communities using WordPress and BuddyPress.

	<div id="mc_embed_signup" class="margin-top-half">
		<form action="//wefoster.us11.list-manage.com/subscribe/post?u=5eae74b046d61832422e97744&amp;id=ed2ab6113d" method="post"
		      id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div class="form-group">
				<label for="mce-EMAIL">Subscribe to the WeFoster Community Newsletter</label>
				<input type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="email address" required style="width: 300px;">
			</div>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
		</form>
	</div>

</div>


<h2 class="padding-half margin-bottom-none">From our community..</h2>

<div class="community-news wf-grid">
	<?php
	// Grab Some Recent Posts
	$posts = wff_get_community_posts();

	if ( empty( $posts ) ) {?>
			<div class="wf-post-content wf-grid__col-12">
				<div class="wf-inner-grid wf-admin-box">
					We were unable to retrieve the latest articles from our community.... Please try again later!
				</div>
			</div>
		<?php return;
	}
	foreach ( $posts as $post ) {
		?>
		<div class="wf-post-content wf-grid__col-4">
			<div class="wf-inner-grid wf-admin-box">
				<a target="_blank" href="<?php echo $post->link; ?>">
					<?php if ( empty( $post->better_featured_image->media_details->sizes->medium->source_url ) ): ?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/default-cover-photo.png" alt="<?php echo $post->title->rendered; ?>">
					<?php else: ?>
						<img src="<?php echo $post->better_featured_image->media_details->sizes->medium->source_url; ?>"
						     alt="<?php echo $post->title->rendered; ?>">
					<?php endif; ?>

					<h4>
						<?php echo $post->title->rendered; ?>
					</h4>
				</a>
				<p>
					<?php echo $post->excerpt->rendered; ?>
				</p>
				<br>
				<br>
				<a target="_blank" class="btn btn-primary" href="<?php echo $post->link; ?>">Read Article</a>
			</div>
		</div>
	<?php }
	?>
</div>
