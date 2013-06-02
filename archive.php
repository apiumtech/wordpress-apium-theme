<?php get_header(); ?>

	<div class="grid_11">
	<div id="content">

		<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

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
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		//get_search_form();

	endif;
?>

	</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
