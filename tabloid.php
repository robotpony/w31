<?php
/*
Template Name: Tabloid
Template Post Type: page
*/

	$displayedPosts = [];

?><?php get_header(); ?>

<main class="page tabloid"><div>

<div class="note">
<?php
	// show the page content as a note at the top of the page (might as well use it for something)
	while (have_posts()) {
		the_post();
		the_content();
	}
?>
</div>

	<section class="featured block-list">
	<?php nw_list_posts('Featured posts', 'featured', $displayedPosts, 1, true /* only sticky posts */); ?>
	</section>

	<aside>

		<section>
		<?php nw_get_tagged_posts('Learning', 'learning', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Making stuff', 'maker', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Design', 'design', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('On writing', 'writing', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Motivation', 'motivation', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_tagged_posts('Top-n lists', 'top-10-list', $displayedPosts, 4) ?>
		</section>

		<section>
		<?php nw_get_pages('Cheat Sheets', 'cheat-sheets', 2, $displayedPosts, 10); ?>
		</section>

	</aside>

	<section class="newest block-list">
		<?php nw_list_posts('Newest Posts', 'newest-posts', $displayedPosts, 500); ?>
	</section>

</div></main>

<?php get_footer(); ?>