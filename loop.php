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

