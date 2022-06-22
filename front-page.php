<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package factory-direct-mattress
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			get_template_part( 'template-parts/content', 'home' );		
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
