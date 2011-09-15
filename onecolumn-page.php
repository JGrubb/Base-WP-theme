<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage ibd
 * @since ibd 1.0
 */

get_header(); ?>
<div id="home-stage">
  <div class="home-wrap">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>
  </div>
  <div class="clear"></div>
</div>
<div class="home-wrap">

<div class="home-grid">
  <div class="first-grid">
  <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
  </div>
</div>
<div class="home-grid">
  <div class="middle">
  <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  </div>
</div>
<div class="home-grid">
  <div class="last-grid">
  <?php dynamic_sidebar( 'primary-widget-area' ); ?>
  </div>
</div>

</div>
<?php get_footer(); ?>