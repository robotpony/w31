
<footer>
	<div class="meta">
		<nav>
			<h1><a href="/" title="<?= get_bloginfo( 'description' ); ?> - version 30"><?php bloginfo('name'); ?></a></h1>

			<a href="/?s=" title="search">
				<i class="fa fa-search"></i> search
			</a>
			<a href="/about-the-site/" title="About the site">
				<i class="fa fa-question-circle"></i> about
			</a>
			<a href="http://blog.napkinware.com" title="Handy things">
				<i class="fa fa-folder"></i> biz blog
			</a>
			<a href="http://napkinware.com" title="Portfolio">
				<i class="fa fa-sign-out"></i> Hire me
			</a>
			<a href="http://twitter.com/robotpony/" title="@robotpony tooter">
				<i class="fa fa-twitter"></i> @robotpony
			</a>
			<a href="/feed" title="RSS feed">
				<i class="fa fa-rss"></i> subscribe
			</a>

			<p>COPYRIGHT &copy; 1997-<?= date('Y'); ?> BRUCE ALDERSON</p>
		</nav>

	</div>

</footer>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script type="text/javascript">
  (function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<?php wp_footer(); ?>

</body>
</html>