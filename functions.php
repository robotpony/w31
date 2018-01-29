<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

update_option('siteurl', NWHOST);
update_option('home', NWHOST);

add_theme_support( 'post-thumbnails' );

function nw_custom_scripts() {
	wp_enqueue_script( 'w30', get_template_directory_uri() . '/js/w31.js', array( 'jquery' ), '1.0.0', true );
}

function nw_custom_styles() {
	if ( ! is_admin() ) {
		 wp_enqueue_style(
			'screen',
			get_stylesheet_directory_uri() . '/css/w31.less',
			'w31.css',
			'1',
			'screen'
		);
	}
}

/* Install above customization functions */

add_action( 'wp_enqueue_scripts', 'nw_custom_scripts' );
add_action('wp_enqueue_scripts', 'nw_custom_styles', 500);


/* Get a formatted list of posts with a specific tag

	[in]  title 				Text title for this block
	[in]  tag 					Tag to limit this set to
	[in]  excludedPostIDs 		A list of post IDs that will be excluded
	[out] excludedPostIDs 		Updated list of post IDs to exclude, includes this set
	[in]  limit 				Max number of posts
*/
function nw_get_tagged_posts($title, $tag, &$excludedPostIDs, $limit = 5) {

	global $post;
	$args = [
		'posts_per_page' => $limit,
		'post__not_in' => $excludedPostIDs,
		'tax_query'      => [
			[
				'taxonomy'  => 'post_tag',
				'field'     => 'slug',
				'terms'     => $tag
			]
		]
	];

	$posts = get_posts( $args );
	if ($posts) {
?>
		<h2><?= $title ?></h2>
		<ul class="<?= $tag ?>">
<?php
		foreach ( $posts as $post ) {
			setup_postdata( $post );
			$excludedPostIDs[] = $post->ID;
?>
			<li><a class="more" href="<?php the_permalink(); ?>">
				<?php the_title(); ?></a>
			</li>
<?php
			}
			wp_reset_postdata();
?>
		</ul>
<?php
	} else {
?>
<p>Nothing in <?= $tag ?> yet.</p>
<?php
	}
}

/* Get a formatted list of pages starting at the given parent ID

	[in]  title 				Text title for this block
	[in]  tag 					Tag to limit this set to
	[in]  pageParent 			Page parentID to start from
	[in]  excludedPostIDs 		A list of post IDs that will be excluded
	[out] excludedPostIDs 		Updated list of post IDs to exclude, includes this set
	[in]  limit 				Max number of posts
*/
function nw_get_pages($title, $tag, $pageParent, &$excludedPostIDs, $limit = 5) {
?>
		<h2><?= $title ?></h2>

		<ul class="<?= $tag ?>">
<?php
	$pages = get_pages(
		[
			'child_of' => $pageParent,
			'post__not_in' => $excludedPostIDs,
			'sort_column' => 'menu_order',
			'sort_order' => 'desc',
			'number' => $limit
		]
	);

	foreach( $pages as $page ) {
		$excludedPostIDs[] = $page->ID;
	?>
		<li><a class="more" href="<?= get_page_link( $page->ID ); ?>"><?= $page->post_title; ?></a></li>
<?php
	}
?>
		</ul>
<?php
}

/* Get a formatted list of posts

	[in]  title 				Text title for this block
	[in]  tag 					Tag to limit this set to
	[in]  excludedPostIDs 		A list of post IDs that will be excluded
	[out] excludedPostIDs 		Updated list of post IDs to exclude, includes this set
	[in]  limit 				Max number of posts
	[in]  stickyOnly 			Only show posts marked as "sticky"
*/
function nw_list_posts($title, $tag, &$excludedPostIDs, $limit = 10, $stickyOnly = false) {
	global $post;

		$args = [
			'posts_per_page' => $limit,
			'post__not_in' => $excludedPostIDs
		];

	if ($stickyOnly) {
		$args['post__in'] = get_option( 'sticky_posts' );
		$args['ignore_sticky_posts'] = 1; /* make query ignore sticky posts when specifying them explicitly */
	}

	$posts = get_posts( $args );
	foreach ( $posts as $post ) {
		setup_postdata( $post );

		$excludedPostIDs[] = $post->ID;
?>
	<article>
		<h1><?php the_title(); ?></h1>
		<var><?php the_date(); ?></var>
		<span><?php the_excerpt() ?></span>
		<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>
		<a class="button more" href="<?php the_permalink(); ?>">Read more</a>
	</article>
<?php
		}
		wp_reset_postdata();
}


function nw_blogcastObjectFromPost($post) {
    if ($url = get_field('audio_file_url', $post)) {
        return (object) [
            'url' => $url,
            'duration' => get_field('audio_file_duration', $post),
            'hasCommentary' => get_field('audio_has_commentary', $post),
			'id' => preg_replace('/[^\w\d]+/', '-', $url)
		];
    } else {
		return false;
	}
}