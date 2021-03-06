<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs41Base
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>

<!-- o tratamento da imagem é feito pela função em template-tags.php -->
<?php bootstrap_base_4_1_post_thumbnail(); ?>

<div class="card-body">

	<header>
		<?php the_title( '<h1 class="card-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


	<div class="card-text">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap-base-4-1' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .card-text -->

	</div> <!-- .card-body -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="card-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="sr-only sr-only-focusable">%s</span>', 'bootstrap-base-4-1' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
