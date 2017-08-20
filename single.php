<?php
/**
 * @package WordPress
 * @subpackage Theme = WIN
 */
 get_header(); ?>

	<div class="artwrap">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<h1 class="entry-title">	
			<?php the_title(); ?>
		</h1>
			- Posted <?php the_time('F jS, Y') ?> by <?php the_author_posts_link(); ?>
			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
				
				<div class="tags">
					<?php the_tags( __('Tags: '), ', ', ''); ?>
				</div><!-- /tags -->

			</div>

		</article>

	<?php comments_template(); ?>

	<?php endwhile; endif; ?>


	</div><!-- /artwrap -->
	
<?php post_navigation(); ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>