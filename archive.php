<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (is_category()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
								</h1>

							<?php } elseif (is_tag()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
								</h1>

							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
							?>
								<h1 class="archive-title h2">

									<span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>

								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>

							<?php } elseif (is_month()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
									</h1>

							<?php } elseif (is_year()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
									</h1>
							<?php } ?>

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
											<a href="<?php the_permalink() ?>">
												<?php 
													$post_content = get_the_content();
													$post_content = preg_replace( "|<a *href=\"(.*)\">(.*)</a>|", "\\2", $post_content );
													echo $post_content
												?>
											</a>
										</section>

										<aside class="clearfix">
											<div class="post-social">
												<a href="https://www.facebook.com/sharer/sharer.php?u=<?php esc_url(the_permalink()) ?>" target="_blank" class="post-facebook"><span class="icon icon-facebook"></span></a>

												<a href="https://twitter.com/intent/tweet?text=<?php esc_url(the_title_attribute()) ?>&url=<?php esc_url(the_permalink())?>&via=turkgif&related=turkgif" target="_blank" class="post-twitter"><span class="icon icon-twitter"></span></a>

												<a href="http://www.tumblr.com/share/photo?source=<?php echo esc_url(wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID))) ?>&caption=<?php echo urlencode(the_title_attribute()) ?>&clickthru=<?php echo urlencode(the_permalink()) ?>" target="_blank" class="post-tumblr"><span class="icon icon-tumblr"></span></a>
												
												<a href="mailto:arkadas@adresi.com?Subject=<?php echo esc_url(the_title_attribute()) ?>&Body=<?php echo urlencode(the_permalink()) ?>" target="_blank" class="post-mail"><span class="icon icon-mail"></span></a>
											
												<a href="<?php the_permalink() ?>#dokul" class="dokul">Dök içini <span class="icon icon-bubbles"></span></a>
												
											</div>

											<p class="tags"><?php the_tags( __( '', 'bonestheme' ) , '', '' ); ?></p>
										</aside>
									</div>
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
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

								</div>

			</div>

<?php get_footer(); ?>
