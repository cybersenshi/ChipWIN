<?php
/**
 * @package WordPress
 * @subpackage Theme = WIN
 */
 get_header(); ?>

	<div class="artwrap">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>
			
			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>

			<div class="upd8">Last Updated: <?php the_modified_date(); ?></div>
		</article>
		
		<?php comments_template(); ?>

		<?php endwhile; endif; ?>
		
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>