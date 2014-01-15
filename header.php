<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" class="no-js"><!--<![endif]-->

	<head>
		<meta name="robots" content="nofollow,noindex" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500&subset=latin-ext' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' id='turktheme-css' href='http://test.turkgif.com/wp-content/themes/turktheme/inc/final.min.css' type='text/css' media='all' />
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
		
		<?php if (is_single()) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<title>TürkGif - <?php the_title(); ?></title>
			<meta name="title" content="TürkGif - <?php the_title(); ?>" />
			<meta name="keyword" content="<?php
				$keywords = get_the_tags();
				if( $keywords ) {
				    foreach($keywords as $keyword) {
				      echo $keyword->name . ',';
				    }
				}
			 ?>" />

			<meta property="og:url" content="<?php the_permalink() ?>"/>  
			<meta property="og:title" content="<?php single_post_title(''); ?>" />  
			<meta property="og:type" content="article" />  
			<meta property="og:image" content="<?php

			if (function_exists('wp_get_attachment_thumb_url')) {
				echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); 
			}?>" />   

			<meta name="twitter:card" content="photo">
			<meta name="twitter:title" content="TürkGif - <?php the_title(); ?>">
			<meta name="twitter:image" content="<?php

			if (function_exists('wp_get_attachment_thumb_url')) {
				echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); 
			}?>" />

		<?php endwhile; endif; elseif(is_home()) : ?>
			<title>TürkGif</title>
			<meta name="title" content="TürkGif" />
			<meta name="keyword" content="turk,türk,gif,türkgif,turkgif,türkiye,türkiyeden,gifler" />
			<meta property="og:url" content="http://test.turkgif.com"/>  
			<meta property="og:title" content="TürkGif" />
			<meta property="og:type" content="website" />  
			<meta property="og:image" content="http://test.turkgif.com/logo_300x300.gif" />  

			<meta name="twitter:card" content="photo">
			<meta name="twitter:title" content="TürkGif">
			<meta name="twitter:image" content="http://test.turkgif.com/logo_300x300.gif" />
		
		<?php endif; ?>
			<meta name="description" content="Sadece Türkiye'den gifler." />
			<meta property="og:description" content="Sadece Türkiye'den gifler." />
			<meta property="og:site_name" content="TürkGif" />
			<meta property="fb:admins" content="1021654561"/>
			<meta property="fb:app_id" content="409586202501141"/>
			<meta name="twitter:site" content="@turkgif">
			<meta name="twitter:creator" content="@turkgif">
		
		<?php //wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">
			<header class="header" role="banner">
				<div id="inner-header" class="wrap clearfix">
					<nav role="navigation" class="clearfix">
						<div id="logo"><a href="/" rel="nofollow">Türk<span>Gif</span></a></div>
						<a href="javascript:;" class="goup icon icon-arrow-up"></a>
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
			<div class="social wrap clearfix small">
				<p>Sadece Türkiye'den gifler</p>
				<div class="like-container">
					<div class="fb-like" data-href="http://turkgif.com" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				</div>
				<div class="tweet-container">
					<a href="https://twitter.com/turkgif" class="twitter-follow-button" data-show-count="true" data-lang="tr" data-width="175px">@turkgif'i takip et</a>
				</div>
			</div>
