<?php //Template Name: Forum Page
get_header(); ?>
<div id="main" class="group">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<div class="main-content group">
				<?php the_content('Read More...'); ?>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>