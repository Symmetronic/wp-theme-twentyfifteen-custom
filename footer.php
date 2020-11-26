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
 * - Add copyright information.
 * 
 * Last modified 2020-11-26.
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="site-info">

			<?php
			if ( function_exists( 'the_privacy_policy_link' ) || has_nav_menu( 'footer' ) ) : ?>

				<div class="footer-links">

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

				</div><!-- .footer-links -->

			<?php endif; ?>

			<div class="footer-about">

				<div class="footer-copyright">
					&copy;
					<?php echo date( 'Y' ) ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</div><!-- .footer-copyright -->

				<div aria-hidden="true" class="go-to-top">
					<a href="#" tabindex="-1"></a>
				</div><!-- .go-to-top -->

			</div><!-- .footer-about -->

		</div><!-- .site-info -->

	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
