<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package professional-womens-network
 */

get_header();
?>
	<main id="primary" class="site-main">
	<div class="inner-banner"></div>
		<!-- Banner Start -->
		<div class="inner-page-text">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="inner-title">
							<h1 class="h2-title"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
    	<!-- Banner End -->
		<div class="blog-post sample-page-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
