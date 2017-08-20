<?php
/**
 * @package WordPress
 * @subpackage Theme = WIN
 */
 get_header(); ?>

	<div class="artwrap">

	<?php if (have_posts()) : ?>

		<h2 class="arch-head"><?php _e('Search Results','themewin'); ?></h2>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2 class="entry-title">
					<a href="<?php the_permalink() ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<br />
				- <?php the_author_posts_link(); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h2 class="arch-head"><?php _e('Nothing Found','themewin'); ?></h2>

	<?php endif; ?>

	</div><!-- /artwrap -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>