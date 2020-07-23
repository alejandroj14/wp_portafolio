<?php
/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php my_app_shim_wp_body_open(); ?>

		<!--<?php \MyApp::render( 'views/partials/logo' ); ?>-->
		<header>
			<div class="container">
				<div class="row py-3">
					<div class="col-md-4 col-sm-6">
						<a href="<?php echo home_url(); ?>" class="header__menu"><img src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/avatar3.png') ?>" alt="Logo"></a>
					</div>

					<div class="col-md-8 col-sm-6 d-flex justify-content-end">
						<nav class="navbar navbar-expand-lg navbar-light header__menu">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<?php wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu_class'  => 'menu-principal',
										'container_class' => 'container-menu'
									)
								); ?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>