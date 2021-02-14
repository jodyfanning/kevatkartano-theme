<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Kevätkartano
 * @since Kevätkartano 1.0
 */
?>

	<?php get_sidebar( 'secondary' ); ?>

	</section><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'kevatkartano_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'kevatkartano' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'kevatkartano' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kevatkartano' ), 'Kevätkartano', '<a href="https://www.kevatkartano.com" rel="designer">Jody Fanning</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>