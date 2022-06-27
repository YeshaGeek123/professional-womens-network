<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package professional-womens-network
 */


?>



<article id="event-<?php the_ID(); ?>" <?php post_class(); ?>>



	<!-- Inner Banner Start -->
	<div class="inner-banner"></div>
		<!-- Inner Banner End -->
	<div class="entry-content events-inner-page inner-page-text inner-section zi-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 m-auto">
					<div class="inner-title ">
						<?php the_title( '<h1 class="h2-title">', '</h1>' ); ?>
					</div>
					<div class="events-img">
						<?php professional_womens_network_post_thumbnail(); ?>
					</div>
					<div class="events-content">
						<?php
							the_content();
							the_excerpt();
						
							// wp_link_pages(
							// 	array(
							// 		'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'professional-womens-network' ) . '">',
							// 		'after'    => '</nav>',
							// 		// / translators: %: Page number. /
							// 		'pagelink' => esc_html__( 'Page %', 'professional-womens-network' ),
							// 	)
							// );
							?>
					</div>
					<?php
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'professional-womens-network' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'professional-womens-network' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					?>
				</div>
			</div>
		</div>
		

	</div><!-- .entry-content -->

	

	

</article><!-- #post-<?php the_ID(); ?> -->
