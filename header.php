<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>TürkGif</title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png" />

		<!--[if IE]>
			<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<![endif]-->
		
		<meta name="msapplication-TileColor" content="#27AE60">
		<meta name="msapplication-TileImage" content="win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="Türk Gif &raquo; Feed" href="http://test.turkgif.com/feed/" />
		<link rel="alternate" type="application/rss+xml" title="Türk Gif &raquo; Comments Feed" href="http://test.turkgif.com/comments/feed/" />
		<link rel='stylesheet' id='turktheme-css'  href='http://test.turkgif.com/wp-content/themes/turktheme/inc/final.min.css' type='text/css' media='all' />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500&subset=latin-ext' rel='stylesheet' type='text/css'>
		<?php //wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-46790970-1', 'turkgif.com');
		  ga('send', 'pageview');
		</script>

		<div id="container">
			<header class="header" role="banner">
				<div id="inner-header" class="wrap clearfix">
					<nav role="navigation" class="clearfix">
						<div id="logo"><a href="/" rel="nofollow">Türk<span>Gif</span></a></div>
						<ul>
							<li><a href="iletisim">iletişim</a></li>
							<?php
								$tags = get_tags('number=8&orderby=count&order=DESC');
								$html = "";
								foreach ( $tags as $tag ) {
									$tag_link = get_tag_link( $tag->term_id );

									$html .= "<li><a href='{$tag_link}' title='{$tag->name}'>{$tag->name}</a></li>";
								}

								echo $html;
							?>
						</ul>
						<?php //bones_main_nav(); ?>
					</nav>
				</div>
			</header>
