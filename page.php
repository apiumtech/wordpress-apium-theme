<?php get_header(); ?>
	<div class="grid_11">
      <div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('Continue reading &rarr;'); ?>
				<div class="clearfix"></div>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	 <?php edit_post_link('Edit', '<p>', '</p>'); ?>
	 <?php comments_template( '', true ); ?>
	 </div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>