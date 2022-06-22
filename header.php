<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package professional-womens-network
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/professional-womens-network/assets/fonts/Poppins-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/professional-womens-network/assets/fonts/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url();?>/wp-content/themes/professional-womens-network/assets/fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'professional-womens-network' ); ?></a>

	<!-- Header Start -->
	<header id="masthead" class="site-header">
		<div class="main-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div>
									
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-menu-box">
									<div class="header-main-menu">
											<?php
											wp_nav_menu(
												array(
													'theme_location' => 'menu-1',
													'menu_id'        => 'primary-menu',
												)
											);
											?>
									</div>
									<div class="contact-info">
										<ul>
											<li>
												<span class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
														<path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" transform="translate(-2 -4)" fill="#fff"/>
													</svg>
												</span>
												<a href="mailto:pwn@pwn.org" title="pwn@pwn.org">
													pwn@pwn.org
												</a>
											</li>
											<li>
												<span class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20">
														<g transform="translate(-4 -2)">
															<g>
															<g>
																<path d="M12,2A8,8,0,0,0,4,9.92c0,5.48,7.05,11.58,7.35,11.84a1,1,0,0,0,1.3,0C13,21.5,20,15.4,20,9.92A8,8,0,0,0,12,2Zm0,17.65c-1.67-1.59-6-6-6-9.73a6,6,0,1,1,12,0C18,13.62,13.67,18.06,12,19.65Z" fill="#fff"/>
																<path d="M12,6a3.5,3.5,0,1,0,3.5,3.5A3.5,3.5,0,0,0,12,6Zm0,5a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,12,11Z" fill="#fff"/>
															</g>
															</g>
														</g>
													</svg>
												</span>
												<a href="javascript:void(0);" title="PWN PO Box 1613 Cedar Rapids, IA 52406-2613">
													PWN PO Box 1613 Cedar Rapids, IA 52406-2613
												</a>
											</li>
										</ul>
										<div class="social-media">
												<a href="javascript:void(0);" title="Facebook">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="9.49" height="18" viewBox="0 0 9.49 18">
															<path d="M941.832,5824.791l.419-3.2h-3.217v-2.043c0-.926.263-1.558,1.611-1.558h1.719v-2.862a23.431,23.431,0,0,0-2.506-.126,3.884,3.884,0,0,0-4.178,4.23v2.36h-2.806v3.2h2.806V5833h3.354v-8.21Z" transform="translate(-932.874 -5815.001)" fill="#fff"/>
														</svg>
													</span>
												</a>
												<a href="javascript:void(0);" title="LinkedIn">
													<span>
														<svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19">
															<g>
																<rect width="19" height="19" transform="translate(19 19) rotate(180)" fill="#fff" opacity="0"/>
																<path d="M13.945,8.4A4.629,4.629,0,0,0,9.3,13.021v4.669a.715.715,0,0,0,.715.715h1.667a.715.715,0,0,0,.715-.715V13.021A1.54,1.54,0,0,1,14.1,11.489a1.588,1.588,0,0,1,1.389,1.588v4.613a.715.715,0,0,0,.715.715h1.667a.715.715,0,0,0,.715-.715V13.021A4.629,4.629,0,0,0,13.945,8.4Z" transform="translate(-1.916 -1.731)" fill="#fff"/>
																<rect width="3.573" height="9.289" rx="0.9" transform="translate(2.382 7.384)" fill="#fff"/>
																<circle cx="1.786" cy="1.786" r="1.786" transform="translate(2.382 2.382)" fill="#fff"/>
															</g>
														</svg>
													</span>
												</a>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="sticky-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="site-branding sticky-logo">
						<a href="<?php echo home_url();?>" title="Professional Women’s Network">
							<img width="1138" height="119" src="<?php echo home_url(); ?>/wp-content/uploads/2022/06/sticky-logo.svg" alt="sticky-logo">
						</a>
					</div>	
				</div>
				<div class="col-lg-9">
					<div class="sticky-header-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
