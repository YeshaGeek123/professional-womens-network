<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package professional-womens-network
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Inner Banner Start -->
			<div class="inner-banner"></div>
		<!-- Inner Banner End -->
		<section class="error-404 not-found inner-section zi-1">
			 <div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-title">
							<h1 class="h2-title">Page not found...</h1>
						</div>
						<div class="error-img">
							<img width="1050" height="630" src="<?php echo home_url(); ?>/wp-content/themes/professional-womens-network/assets/images/404-img.svg" alt="Error">
						</div>
					</div>
				</div>
			 </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
