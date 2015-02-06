<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail()) { ?>
	<header class="post-image <?= strtolower(get_field('header_style')); ?>">
<?php
$imageID = get_post_thumbnail_id();
$imageURL = wp_get_attachment_image_src($imageID, 'full');
?>
		<div class="layer background" style="background: url(<?= $imageURL[0] ?>) no-repeat;">
			<div class="overlay"></div>
		</div>

		<div class="layer post-title">
			<h1><?php the_title(); ?></h1>
		</div>
	</header>
<?php } else {
		if (get_the_title()) { ?>
	<header class="standard-post">
		<h1><?php the_title(); ?></h1>
	</header>
<?php  }
} ?>

	<?php the_content(); ?>

	<footer>
		<a href="#" onclick="$('#lovinit').toggle(0); return false"><i class="fa fa-heart"></i></a>

		<div id="lovinit" style="display: none;">
			<nav class="meta">
				<var>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<i class="fa fa-bookmark"></i></a>
				</var>

				<date><?php the_time('F j, Y'); ?></date>
			</nav>


			<nav class="social">
				<span class="tooter" style="float: left;">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="robotpony" data-count="none" data-size="large">Discuss</a>
					</span>
					<span class="goog" style="float: left; margin-left: 8px; margin-top: 2px;">
					<div class="g-plusone" data-annotation="none" size="Standard"></div>

				</span>
			</nav>

			<nav class="admin">
			<?php edit_post_link('<i class="fa fa-pencil"></i> Edit'); ?>
			</nav>


		</div>

	</footer>

</article>
