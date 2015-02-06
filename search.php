<?php get_header(); ?>

<main><div>


	<section class="sidebar">
		<header>
			<h3 style="text-align: center;"><?= $wp_query->found_posts ?> search results for &mdash; <var><?php echo get_search_query(); ?></var></h3>
		</header>


		<?php get_sidebar(); ?>

	</section>

	<section class="search-results">

<?php

query_posts('showposts=10');


if (have_posts()) {
	while (have_posts()) {
		the_post();
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1>
			<var>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<i class="fa fa-bookmark"></i></a>
			</var>

			<?php the_title(); ?>

			<date><?php the_time('F j, Y'); ?></date>
		</h1>
		<?php the_excerpt(); ?>
		<br/>
	</article>
<?php
	}
} else {

?>
	<article>
		<p>Nothing here</p>
	</article>

<?php } ?>



	</section>

	<?php get_template_part('pagination'); ?>


</div></main>


<?php get_footer(); ?>