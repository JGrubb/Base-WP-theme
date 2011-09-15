<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ibd
 * @since ibd 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href="<?php bloginfo('template_directory')?>/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory')?>/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
<!--[if IE]>
    <link href="<?php bloginfo('template_directory')?>/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
<![endif]-->

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body <?php body_class(); ?>>
  <div id="header">
    <div id="header-wrap">
      <div id="flaggy-thing"></div>  
      <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
        <h1 id="logo"><?php bloginfo( 'name' ); ?></h1>
      </a>
      <div id="phone-badge">Call Us today! (704) 200-2001</div>
    </div>
  </div>
  <div id="nav">
    <?php wp_nav_menu() ?>
    <div class="clear"></div>
  </div>
	<div id="content">