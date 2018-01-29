<?php get_header(); ?>

<main><div>
	<h4><?php _e( 'Found in: ', 'html5blank' ); the_category(' + '); ?></h4>
	<section>
<?php get_template_part('loop'); ?>
	</section>

<?php get_template_part('pagination', 'part'); ?>

</div></main>

<?php get_footer(); ?>
