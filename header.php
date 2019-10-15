<?php
/**
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
	<link href="/assets/scss/wp-content/themes/changeCatalystResponsive/Assets/webfonts/fontawesome-all.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class = "menu">
	<div class = "linkWrap">
		<ul class="linkList">
			<li>
				<a class="menuLink" href = "/about/">ABOUT</a><i class="fas fa-chevron-right"></i>
			</li>
			<li>
				<a class="menuLink" href = "/services/">SERVICES</a><i class="fas fa-chevron-right"></i>
			</li>
			<li>
				<a class="menuLink" href = "/projects/">PROJECTS</a><i class="fas fa-chevron-right"></i>
			</li>
			<li>
				<a class="menuLink" href = "/contact/">CONTACT</a><i class="fas fa-chevron-right"></i>
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
						<a href="<?=site_url()?>"><img src="/assets/scss/wp-content/uploads/2019/01/ChangeCatalystLogoTransparent.png" class="siteLogo" ></a>
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
