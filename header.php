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

		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="../apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="../apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="../apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="../apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="../apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="../apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="../apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="../apple-touch-icon-152x152.png" />

		<!--[if IE]>
			<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="../wp-content/themes/turktheme/inc/html5shiv.js"></script>
		<![endif]-->
		
		<meta name="msapplication-TileColor" content="#27AE60">
		<meta name="msapplication-TileImage" content="win8-tile-icon.png">
		<link rel="alternate" type="application/rss+xml" title="Türk Gif &raquo; Feed" href="http://test.turkgif.com/feed/" />
		<link rel="alternate" type="application/rss+xml" title="Türk Gif &raquo; Comments Feed" href="http://test.turkgif.com/comments/feed/" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="Türk Gif &raquo; Feed" href="http://test.turkgif.com/feed/" />
		
		<link rel='stylesheet' id='turktheme-css' href='http://test.turkgif.com/wp-content/themes/turktheme/inc/final.min.css' type='text/css' media='all' />
		<!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500&subset=latin-ext' rel='stylesheet' type='text/css'> -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500&amp;text=ABC%C3%87DEFG%C4%9EHI%C4%B0JKLMNO%C3%96PRS%C5%9ETU%C3%9CVYZabc%C3%A7defg%C4%9Fh%C4%B1ijklmno%C3%B6prs%C5%9Ftu%C3%BCvyz%E2%80%99%27%5B%5D()%7B%7D%E2%9F%A8%E2%9F%A9%3A%2C-%E2%80%94%E2%80%A6!.%3F%E2%80%9C%E2%80%9D%E2%80%98%E2%80%99%22%3B%2F%26%40*%5C%E2%80%A2%5E%C2%A9%C2%B0%C2%A1%C2%BF%23%25%C2%B6%E2%80%B2%C2%AE%C2%A7~_%E2%80%93' rel='stylesheet' type='text/css'>
		
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<?php //wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">
			<header class="header" role="banner">
				<div id="inner-header" class="wrap clearfix">
					<nav role="navigation" class="clearfix">
						<div id="logo"><a href="/" rel="nofollow">Türk<span>Gif</span></a></div>
						<ul id="menu">
							<li><a href="iletisim">İLETİŞİM</a></li>
							<li><a id="more-tags" href="javascript:;">DAHA FAZLA <span class="icon icon-arrow-down"></span></a></li>
							<li id="more-tags-area">
								<?php
									$tags = get_tags('number=20&orderby=count&order=DESC');
									$html = "<ul>";
									foreach ( $tags as $tag ) {
										$tag_link = get_tag_link( $tag->term_id );

										$html .= "<li><a href='{$tag_link}' title='{$tag->name}'>{$tag->name}</a></li>";
									}
									$html .= "</ul>";

									echo $html;
								?>
							</li>
						</ul>
						<?php //bones_main_nav(); ?>
					</nav>
				</div>
			</header>
			<div class="social wrap clearfix">
				<p>Sadece Türkiye'den gifler</p>
				<div class="like-container">
					<div class="fb-like" data-href="http://turkgif.com" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</div>
				<div class="tweet-container">
					<a href="https://twitter.com/turkgif" class="twitter-follow-button" data-show-count="true" data-lang="tr" data-width="175px">@turkgif'i takip et</a>
				</div>
			</div>
