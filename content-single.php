<?php
/**
 * @package Kevätkartano
 * @since Kevätkartano 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php kevatkartano_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'kevatkartano' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'kevatkartano' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'kevatkartano' ) );

			if ( ! kevatkartano_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<span class="entry-meta-tag">This entry was tagged %2$s. </span><span class="entry-meta-bookmark">Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</span>', 'kevatkartano' );
				} else {
					$meta_text = __( '<span class="entry-meta-bookmark">Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</span>', 'kevatkartano' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<span class="entry-meta-tag">This entry was posted in %1$s and tagged %2$s. </span><span class="entry-meta-bookmark">Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</span>', 'kevatkartano' );
				} else {
					$meta_text = __( '<span class="entry-meta-tag">This entry was posted in %1$s. </span><span class="entry-meta-bookmark">Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.</span>', 'kevatkartano' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'kevatkartano' ), '<span class="edit-link entry-meta-edit">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
