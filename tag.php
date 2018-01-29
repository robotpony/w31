<?php get_header(); ?>

	<main><div>
		<!-- section -->
		<section>
			<?php
				nw_get_tagged_posts(
					single_tag_title('Things found in: ', false),
					strtolower(single_tag_title('', false)),
					$displayedPosts,
					50
				);
			?>
		</section>
		<!-- /section -->
	</div></main>

<?php get_footer(); ?>
