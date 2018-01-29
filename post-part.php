<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail()) { ?>
	<header class="post-image <?= strtolower(get_field('header_style')); ?>">
<?php
$imageID = get_post_thumbnail_id();
$imageURL = wp_get_attachment_image_src($imageID, 'full');
?>
		<div class="layer background" style="background: transparent url(<?= $imageURL[0] ?>) no-repeat;">

		</div>

		<div class="layer post-title" data-depth="0.05">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>

	</header>
<?php } else { ?>

	<h1>
		<?php the_title(); ?>
	</h1>
<?php } ?>

<?php

if ($blogcast = nw_blogcastObjectFromPost($post)) { ?>

	<figure class="blogcast" id="<?= $blogcast->id ?>">
	<p>Listen to this post<?= $blogcast->hasCommentary ? ' (with commentary)' : '' ?></p>
	<var><?= $blogcast->duration ?></var>
	<audio controls>
  		<source src="/podcasts/wv/<?= $blogcast->url ?>.m4a" type="audio/mp4">
		<source src="/podcasts/wv/<?= $blogcast->url ?>.mp3" type="audio/mpeg">
  		<source src="/podcasts/wv/<?= $blogcast->url ?>.ogg" type="audio/ogg">
		Your browser does not support the audio element.
	</audio>
	<figcaption>the warpedvisions blogcast</figcaption>
	</figure>

<?php	} ?>

	<?php the_content(); ?>

			<?php /* comments_template( '', true ); */ // Remove if you don't want comments ?>

	<?php if (!is_page()) { ?> 
	<footer>

		<span class="link">
			<var>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<date><?php the_time('F j, Y'); ?></date>
					#
				</a>
			</var>
		</span>

		<?php the_tags( '<ul class="tags"><li>', '</li><li>', '</li></ul>' ); ?>

	</footer>
	<?php } ?>


</article>
