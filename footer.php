<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Modifications:
 * 
 * - Remove "Proudly powered by WordPress" note.
 * - Add footer navigation menu.
 * - Add go-to-top link.
 * 
 * Last modified 2020-11-24.
 */
?>

	</div><!-- .site-content -->

	<?php
	if ( function_exists( 'the_privacy_policy_link' ) || has_nav_menu( 'footer' ) ) : ?>
	  <footer id="colophon" class="site-footer" role="contentinfo">
		  <div class="site-info">
				<div aria-hidden="true" class="go-to-top">
					<a href="#"></a>
				</div>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '<div class="privacy-policy">', '</div>' );
				}
				?>
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav id="footer-navigation" class="footer-navigation" role="navigation">
						<?php
							// Footer navigation menu.
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'depth'          => 1,
								)
							);
						?>
					</nav><!-- .footer-navigation -->
				<?php endif; ?>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	<?php endif; ?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
