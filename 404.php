<?php get_header(); ?>

<main class="error"><div>
	<section>

		<article id="post-404">

			<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
			<p>I have probably removed the page you have requested. I've recently pared down the site a bit, removing old, useless content. It's good to curate things, and filter out the crap. And the page you were looking for was crap.</p>

			<p>I'm not returning a `404` or `30x`, as the content has been removed on purpose. It's not an error, and I want you to know what's up.</p>
			<p>

		</article>

	</section>

	<section class="sidebar"><?php get_sidebar(); ?></section>


</div></main>

<?php get_footer(); ?>