<?php
/**
 * Template part for displaying posts
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
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="card-title">', '</h1>' );
			else :
				the_title( '<h2 class="card-title"><a class="text-primary" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="card-subtitle mb-2 text-muted">
					<?php
					bootstrap_base_4_1_posted_on();
					bootstrap_base_4_1_posted_by();
					?>
				</div><!-- .card-subtitle mb-2 text-muted -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="card-text">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="sr-only sr-only-focusable"> "%s"</span>', 'bootstrap-base-4-1' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap-base-4-1' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .card-text -->
	</div> <!-- .card-body -->
		<footer class="card-footer">
			<?php bootstrap_base_4_1_entry_footer(); ?>
			<?php bootstrap_base_4_1_entry_footer_tags(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
