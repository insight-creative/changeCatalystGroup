<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package changeCatalystResponsive
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="/assets/scss/wp-content/themes/changeCatalystResponsiveChild/Assets/webfonts/fontawesome-all.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<!--Script for rellax-->
	<script src="/assets/scss/wp-content/themes/changeCatalystResponsiveChild/JS/rellax.min.js" type="text/javascript"></script>

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110471650-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-110471650-1');
	</script>
-->

	<!-- Google Tag Manager -->
	<!--
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TPJZV49');</script>
-->
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

<div class = "menu">

		<div class = "linkWrap">

			<ul class="linkList">

				<li>

					<a class="menuLink" href = "/about/">ABOUT</a><i class=" redIcon fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/services/">SERVICES</a><i class=" redIcon fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/projects/">PROJECTS</a><i class=" redIcon fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/blog/">BLOG</a><i class=" redIcon fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/contact/">CONTACT</a><i class=" redIcon fas fa-chevron-right"></i>

				</li>

			</ul>

		</div>

		<div class="closeMenuButton fullWidth centeredContainer">

			<div>

				<h4 id="closeMenuTitle">CLOSE MENU</h4>

			</div>

		</div>

</div>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="navigation">

		<div id="site-navigation" class="main-navigation">

			<nav>

				<div class="pageWidth menuLinkWrap">

						<a href="https://wordpress-154794-719978.cloudwaysapps.com"><img src="/assets/scss/wp-content/uploads/2019/01/ChangeCatalystLogoTransparent.png" class="siteLogo" ></a>

						<ul class="linkList2">

							<li>

								<a class="menuLink" href = "/about/">ABOUT</a>

							</li>

							<li>

								<a class="menuLink" href = "/services/">SERVICES</a>

							</li>

							<li>

								<a class="menuLink" href = "/projects/">PROJECTS</a>

							</li>

							<li>

								<a class="menuLink" href = "/blog/">BLOG</a>

							</li>

							<li>

								<a class="contactLink" href = "/contact/">CONTACT</a>

							</li>

						</ul>

						<div class = "menuButtonWrap">

							<div class = "menuTextWrap">

								<span class = "menuText">MENU</span>

								<span class = "menuBars">

									<span></span>

									<span></span>

									<span></span>
								</span>

							</div>

						</div>

				</div>

			</nav>

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
