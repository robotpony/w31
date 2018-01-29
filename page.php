<?php get_header(); ?>

<main class="page"><div>
	<section>

<?php

if (have_posts()) {
	while (have_posts()) {
		the_post();

		get_template_part('post', 'part');
}
} else {

?>

<article>
	<p>Nothing here</p>
</article>

<?php } ?>

	</section>

	<section class="sidebar"><?php get_sidebar(); ?></section>

</div></main>


<?php get_footer(); ?>