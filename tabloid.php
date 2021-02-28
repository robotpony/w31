<?php
/*
Template Name: Tabloid
Template Post Type: page
*/

	$skipDisplayedPosts = []; 	/* The list of posts to skip that include the sticky post,
									useful for ensuring sticky post and sidebar don't repeat themselves */
	$skipMainPosts = []; 		/* The list of posts to skip in the blog roll,
									useful for keeping the blog roll from repeating the main story
									Note: this used to skip the sidebar posts too (but that was confusing)
								*/

?><?php get_header(); ?>

<main class="page tabloid"><div>

<div class="note">
<?php
	/* Show the page content as a note at the top of the page (might as well use it for something) */
	while (have_posts()) {
		the_post();
		the_content();
	}
?>
</div>

	<section class="featured block-list">
	<?php 
		// Show the single featured sticky post
		nw_list_posts('Featured posts', 'featured', $skipDisplayedPosts, 1, true /* only sticky posts */); 
		$skipMainPosts = $skipDisplayedPosts; // track the main post to skip it in the blog roll below
	?>
	</section>

	<aside>
		<?php /* This is the sidebar, which has lists of top articles by select category */ ?>
		
		<section>
		<?php nw_get_tagged_posts('Design', 'design', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Learning', 'learning', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Making stuff', 'maker', $skipDisplayedPosts, 4) ?>
		</section>
		
		<section>
		<?php nw_get_tagged_posts('Cookery', 'cooking-and-food', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('On writing', 'writing', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Motivation', 'motivation', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Top-n lists', 'top-10-list', $skipDisplayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_pages('Cheat Sheets', 'cheat-sheets', 2, $skipDisplayedPosts, 10); ?>
		</section>

	</aside>

	<section class="newest block-list">
		<?php /* This is the blogroll, which has all of the other posts (classic tumble style) */ ?>
		<?php nw_list_posts('Newest Posts', 'newest-posts', $skipMainPosts, 500); ?>
	</section>

</div></main>

<?php get_footer(); ?>