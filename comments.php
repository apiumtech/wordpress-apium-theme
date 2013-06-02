<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

		<div class="comments_intro">
		<p><span class="bracket">{</span> <?php comments_number('<span>0</span> comments ... <a href="#respond" rel="nofollow">submit first!</a>', '<span>1</span> comment to read ... please <a href="#respond" rel="nofollow">submit second!</a>', '<span>%</span> comments to read ... please <a href="#respond" rel="nofollow">submit one more!</a>' );?> <span class="bracket">}</span></p>
		</div>
		
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=theme_comment'); ?>
	</ol>
	
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	<div class="comment-navigation">
		<div class="alignleft"><?php previous_comments_link('&larr; Older Comments') ?></div>
		<div class="alignright"><?php next_comments_link('Newer Comments &rarr;') ?></div>
		<div class="clearfix"></div>
	</div>
<?php endif; // check for comment navigation ?>

		<div class="comments_intro">
		<p><span class="bracket">{</span> <span><?php echo count($wp_query->comments_by_type['pings']); ?></span> Pingbacks/Trackbacks <span class="bracket">}</span></p>
		</div>
       
        <?php foreach ($comments as $comment) : ?>
		<?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type != 'comment') { ?>
		<ol class="pinglist"><li><?php comment_author_link() ?></li></ol>
		<?php } ?>
		<?php endforeach; ?>

<?php else : // or, if we don't have comments:

 	if ( ! comments_open() ) :
?>
	<div class="comments_intro_closed">
		<p><span class="bracket">{</span> Comments are closed! <span class="bracket">}</span></p>
	</div>

<?php endif; // end ! comments_open() ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<?php comment_form(); ?>