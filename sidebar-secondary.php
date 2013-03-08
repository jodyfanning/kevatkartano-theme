<?php
/**
 * The Secondary sidebar containing the extra widget areas.
 *
 * @package Kevätkartano
 * @since Kevätkartano 1.0
 */
?>
	<?php if ( is_active_sidebar( 'secondary-sidebar' )) : ?>
		<section id="site-secondary" class="site-secondary">
			<nav id="secondary-sidebar" class="widget-area" role="complementary">
				<?php do_action( 'before_sidebar' ); ?>
				<?php if ( ! dynamic_sidebar( 'secondary-sidebar' ) ) : ?>

					<aside id="meta" class="widget">
						<h1 class="widget-title">No widgets defined</h1>
					</aside>

				<?php endif; // end sidebar widget area ?>
			</nav><!-- #secondary -->
		</section>
	<?php endif; ?>
