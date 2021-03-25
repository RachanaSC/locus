<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package locus
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footermenu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</div>
		
		<div class="site-info" style="text-align:center;">
			<p>
				© 2021 Mara Labs, Inc. All rights reserved. <a>Privacy</a> and <a>Terms</a>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
