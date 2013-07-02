<?php get_header(); ?>
				<article class="post <?php post_class(); ?>">
					<h1 class="post-title">Page Title</h1>
					<section class="post-meta">
						<p class="publishing-info">
							<span class="category">
								Posted in <a href="#" class="category-link"><span class="category-name">Category Name</span></a>
							</span>
							<span class="date">
								on <span class="publish-date">Tuesday, July 2nd at 3:35pm</span>
							</span>
							<span class="author">
								by <a href="#" class="author-link"><span class="author-name">Kyle Yochum</span></a>
							</span>
						</p>
						<div class="post-features">
							<!-- @! social media, whatevs -->
						</div><!-- /.post-features -->
					</section><!-- /.post-meta -->
					<section class="post-content">
						<?php the_content(); ?>
					</section><!-- /.post-content -->
				</article>
				<section id="comments" class="<?php comment_class(); ?>">
					<!--@! comments form -->
				</section><!-- /#comments -->
			</div>
		</div>
		<footer id="page-footer">
			<nav id="footer-navigation"><!-- @! wp-menu --></nav>
			<div id="copyright">&copy; <?php echo date('Y'); ?> CodeallyAwesome.com &ndash; All Rights Reserved.</div>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>