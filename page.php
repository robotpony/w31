<?php get_header(); ?>

<main class="page"><div>
	<section>
<?php get_template_part('loop'); ?>
	</section>

<footer>
<?php get_template_part('pagination', 'part'); ?>
</footer>
</div></main>


<?php get_footer(); ?>