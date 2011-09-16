<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage ibd
 * @since ibd 1.0
 */
?>
<div class="clear"></div>
</div><!-- end #content-->
<div id="footer">
  <div id="footer-wrap">

    <?php get_search_form() ?>
    <?php wp_nav_menu() ?>
    <div id="copyright">
      &copy; <?php print(date('Y')) ?> Environmental Window Solutions<br />
      (704)200-2001<br />
      <a href="mailto:matt@environmentalwindow.com">Email Us</a>
    </div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
  </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.ngg-slideshow').wrap('<div class="grid-8"');
});
</script>
</body>
</html>