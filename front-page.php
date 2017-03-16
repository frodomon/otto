<?php get_header(); ?>
<div id='container' class="group">
	<div id="posts" class="left-col">
		<?php 
			$posts= get_posts('posts_per_page=3');
			foreach ($posts as $post) :  setup_postdata($post); 
		?>			
				<div class="post group">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="byline">by <?php the_author_posts_link(); ?> on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
					<p><?php the_excerpt(); ?></p>
				</div>
			<?php endforeach; ?>		
	</div>
</div>
<?php get_footer(); ?>