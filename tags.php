<?php
/*
Template Name: Tags
*/
?>
<?php get_header(); ?>
	<div class="grid_11">
      <div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<center><?php wp_tag_cloud('smallest=8&largest=26&number=1000'); ?></center>
			</div>
		</div>
		<?php endwhile; endif; ?>
	 <?php edit_post_link('Edit', '<p>', '</p>'); ?>
	 </div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>