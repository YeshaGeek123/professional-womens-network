<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package professional-womens-network
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php professional_womens_network_post_thumbnail(); ?>

	<div class="entry-content">
		<?php

		// $gallery_images = get_field('gallery_images', 8);
		// $limit = 3;
		// $img_count = count($gallery_images);
        // $no_of_loop = ceil(count($gallery_images) / $limit);
		
		// for ($i = 0; $i < $no_of_loop; $i++) {
		// 	$start = $i * $limit;
		// 	echo '<pre>'; print_r( $start ); echo '</pre>';
        //     $gallery_image = array_slice($gallery_images, $start, $limit);
		// 	echo '<pre>'; print_r( $gallery_image ); echo '</pre>';
		// 	$image_url0 = $gallery_image[0]['url'];
		// 	$image_url1 = $gallery_image[1]['url'];
		// 	$image_url2 = $gallery_image[2]['url'];
		// 	echo '<pre>'; print_r($image_url0); echo '</pre>';
		// 	echo '<pre>'; print_r( $image_url1 ); echo '</pre>';
		// 	echo '<pre>'; print_r( $image_url2 ); echo '</pre>';
			
		// }

		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'professional-womens-network' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'professional-womens-network' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
