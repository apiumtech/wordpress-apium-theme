<?php get_header(); ?>
<div class="grid_11">
	<div id="content">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			    <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="float-left"><span class="postmetadata"><span class="date"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_time(get_option('date_format')); ?></a></span> <?php the_category(' / ') ?> <?php edit_post_link('Edit', ' &#8226; ', ''); ?></span></div>  <div class="float-right"><span class="postmetadata"><?php comments_popup_link('No comments', '<span class="date">1</span> comment', '<span class="date">%</span> comments'); ?></span></div>
				<div class="clearfix"></div>
				<div class="entry">
					<?php the_content('Continue reading &rarr;'); ?>
					<?php wp_link_pages( array( 'before' => '<p><span class="tags">Pages:</span>', 'after' => '</p>' ) ); ?>
				</div>
				<div class="clearfix"></div>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&larr; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &rarr;') ?></div>
			<div class="clearfix"></div>
		</div>

	<?php else : ?>
      <div class="post">
		<h2>No posts found. Please try a different search.</h2>
		<?php //get_search_form(); ?>
	  </div>

	<?php endif; ?>

	</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>