<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if (wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

        <link href="/favicon.ico" rel="shortcut icon">
        <link href="/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<meta NAME="ROBOTS" CONTENT="NOODP">
		<link rel="author" href="https://twitter.com/robotpony" />
		<link rel="canonical" href="https://warpedvisions.org" />
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i|Work+Sans:100,400,500,700" rel="stylesheet">

		<?php wp_head(); ?>

<?php include_once('_parts/ga.php'); ?>

	</head>
<?php flush(); ?>
	<body <?php body_class('blog'); ?>>

	<header>
		<div class="flourish left"><hr><hr><hr><hr></div>
		<div class="flourish right"><hr><hr><hr><hr></div>		
		<div>
			<h1>
				<a href="/">warped<b>visions</b>.<em>org</em>
					<?php /* bloginfo('name'); */ ?>
				</a>
			</h1>
		</div>

	</header>
