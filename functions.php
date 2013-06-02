<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640;

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

if (function_exists('register_sidebar'))
	register_sidebar(array(
		'name' => 'Sidebar',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'For Tag Cloud widget',
		'before_widget' => '<hr /><div class="tagwidget">', 
		'after_widget' => '</div>', 
		'before_title' => '<div class="tagwidgettitle"><h3>', 
		'after_title' => '</h3></div>', 
	));

function europe_search_form( $form ) {
    $form = '<form id="searchform" method="get" action="' . home_url( '/' ) . '" >
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="image" src="' . get_template_directory_uri() . '/images/search.png" id="searchbtn" value="Search" />
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'europe_search_form' );

function europe_gravatar( $avatar_defaults ) {
    $myavatar = get_template_directory_uri() . '/images/gravatar.jpg';
    $avatar_defaults[$myavatar] = 'THEME GRAVATAR';
    return $avatar_defaults;
}
add_filter( 'avatar_defaults', 'europe_gravatar' );

function theme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    
     <div id="comment-<?php comment_ID(); ?>">
     <div class="commenthead">
      <div class="comment-author vcard">
         <?php if(function_exists('get_avatar')) {
         echo get_avatar( $comment, $size = '36' );
         } ?>

         <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
      </div>
      

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?>
     
     <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('...awaiting moderation') ?></em>
         <br />
      <?php endif; ?>
      </div>
      <div class="clear"></div>
     
     </div>
     

	<div class="commentbody">
      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
     </div>
<?php } ?>