<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '&raquo;', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " &raquo; $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' &raquo; ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link type="text/css" href="<?php echo get_template_directory_uri() ?>/css/ie.css" rel="stylesheet" media="all" /><![endif]-->

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>






<body <?php body_class(); ?>>

<!-- MENU -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">

            <!-- Logo de apium -->
            <a class="logo" title="IT Consulting Apium Technologies" href="#"></a>

            <!-- Menú -->
            <div class="navbar">

                <ul class="nav apium">
                    <li id="home">
                        <a  href="javascript:"><br>
                            <i> </i>
                            Home</a>
                    </li>
                    <li id="team">
                        <a  href="#whoarewe"><br>
                            <i> </i>
                            Team</a></li>
                    <li id="contact">
                        <a  href="#contactus"><br>
                            <i> </i>
                            Contact</a></li>
                    <li id="blog">
                        <a  href="#"><br>
                            <i> </i>
                            Blog</a></li>
                </ul>
            </div><!-- navbar menu -->
        </div>
    </div>
</div>



<div class="container_16">
<div id="header" class="grid_16">
<div class="bloginfo">
 <span><?php bloginfo('description'); ?></span>
 <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
 <<?php echo $heading_tag; ?> id="site-title"><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a></<?php echo $heading_tag; ?>>
</div>
<div class="search">
		<?php get_search_form(); ?>
</div>
  
</div>
<hr />
			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() || is_tag() ) {
			?>
<div class="browsing">
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <span class="green"><?php single_cat_title(''); ?></span> category</p>
			
			<?php /* If this is a category archive */ } elseif (is_tag()) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> posts tagged: <span class="green"><?php single_tag_title(); ?></span></p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <span class="green"><?php the_time('l, F jS, Y'); ?></span></p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> blog archives
			for <span class="green"><?php the_time('F, Y'); ?></span></p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <span class="green"><?php the_time('Y'); ?></span></p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> blog archives
			for <span class="green"><?php the_search_query(); ?></span>. If you are unable to find anything in these search results, you can try with different search query</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo home_url( '/' ); ?>"><?php echo bloginfo('name'); ?></a> blog <span class="green">archives</span></p>

			<?php } ?>
</div>
<hr />
			<?php }?>
