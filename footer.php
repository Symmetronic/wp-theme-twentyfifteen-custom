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
 * - Remove "Proudly powered by WordPress" note
 * 
 * Last modified 2020-11-19.
 */
?>

	</div><!-- .site-content -->

	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link(
			'<footer id="colophon" class="site-footer" role="contentinfo"><div class="site-info">',
			'</div></footer>'
		);
	}
	?>

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
