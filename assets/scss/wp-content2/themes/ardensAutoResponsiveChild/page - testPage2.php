<?php
/**
 * Template Name: Test2
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ardensAutoResponsive
 */

get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section>
			<div class="materialsHero hero">
				<div class="heroOverlay">	
					<div class="heroHeadingWrap fullWidth">
						<div class="col50">
							<div class="heroHeading">
								<h1 class="whiteText">New Employee Training</h1>
								<p class="whiteText">Company overview, handbook, and training guides</p>
							</div>
						</div>
					</div>
					<div class="heroNav">	
						<ul class="heroNavWrap">	
						<li><a class="heroNavLink" href="#vision">Vision and Mission</a></li>
						<li><a class="heroNavLink" href="#resources1">Resources</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
			<div class="mobileHeroHeading">
				<h1 class="whiteText">New Employee Training</h1>
				<p class="whiteText">Company overview, handbook, and training guides</p>
			</div>
			<div class="mobileHeroNav">	
				<ul class="heroNavWrap">	
				<li><a class="heroNavLink" href="#vision">Vision and Mission</a></li>
				<li><a class="heroNavLink" href="#resources1">Resources</a></li>
				</ul>
			</div>
			<section id="employeeContent">
				<section id ="newEmployees">	
				<div id="vision" class="pageWidth paddedSection centeredContainer">
					<img class="image" src="https://expressrecycling.biz/assets/scss/wp-content/uploads/2018/08/ExpressRecyclingMissionAndValuesSmall.jpg">
				</div>
				<div id="resources1" class="pageWidth flex-container paddedSection centeredContainer">
					<div class="col50">
						<h3 class="redText">Company Structure</h3>
						<a href="https://expressrecycling.biz/assets/scss/wp-content/uploads/2018/08/ExpressCompanyStructure.pdf" target="_blank"><button class="redButton">View Company Structure</button></a>
					</div>
					<div class="col50">
						<h3 class="redText">2018 Calendar</h3>
						<a href="https://expressrecycling.biz/assets/scss/wp-content/uploads/2018/08/ERS-2018-calendar.docx" target="_blank"><button class="redButton">View 2018 Work Calendar</button></a>
					</div>
				</div>
				<div id="resources2" class="pageWidth flex-container paddedSection centeredContainer">
					<div class="col50">
						<h3 class="redText">5 Year Strategic Plan</h3>
						<a href="https://expressrecycling.biz/assets/scss/wp-content/uploads/2018/08/ERS-5-year-strategic-plan.docx" target="_blank"><button class="redButton">View 5 Year Strategic Plan</button></a>
					</div>
					<div class="col50">
						<h3 class="redText">ERS Handbook</h3>
						<a href="https://expressrecycling.biz/assets/scss/wp-content/uploads/2018/08/ERS-handbook.doc" target="_blank"><button class="redButton">View ERS Handbook</button></a>
					</div>
				</div>
				</section>
			</section>
	</main>
</div>
<?php

get_footer();