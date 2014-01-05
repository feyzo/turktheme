<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

							<header class="article-header clearfix">

								<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="byline vcard"><?php
									printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
								?></p>

							</header>
							<div class="clearfix">
								<section class="entry-content clearfix">
									<?php 
										$post_content = get_the_content();
										$post_content = preg_replace( "|<a *href=\"(.*)\">(.*)</a>|", "\\2", $post_content );
										echo $post_content
									?>
								</section>

								<aside class="clearfix">
									<div class="post-social">
										<?php  
											/*<div class="vote-container">
												<a href="javascript:;" class="vote-up"><span class="icon icon-arrow-up"></span></a>
												<a href="javascript:;" class="vote-down"><span class="icon icon-arrow-down"></span></a>
											</div>*/
										?>
										<a href="javascript:;" class="post-facebook"><span class="icon icon-facebook"></span></a>
										<a href="javascript:;" class="post-twitter"><span class="icon icon-twitter"></span></a>
										<a href="javascript:;" class="post-tumblr"><span class="icon icon-tumblr"></span></a>
										<a href="javascript:;" class="post-mail"><span class="icon icon-mail"></span></a>
										<a href="javascript:;" class="post-comment"><span class="icon icon-bubbles"></span></a>
									</div>

									<p class="tags"><?php the_tags( __( '', 'bonestheme' ) , '', '' ); ?></p>
								</aside>
							</div>
							<footer class="article-footer">
								<p class="tags"><?php the_tags( __( '', 'bonestheme' ) , '', '' ); ?></p>

								<div class="post-comments">
									<?php comments_template(); ?>
								</div>
							</footer>
						</article>

						<?php endwhile; ?>

						<?php else : ?>
							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
