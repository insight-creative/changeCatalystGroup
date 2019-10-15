<?php
/**
 * @package changeCatalystResponsive
 */
get_header();

?>
<div id="barba-wrapper">
	<div class="barba-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<section id="aboutHero" class="smallPaddedSection">
					<div class="pageWidth">
						<div class="heading flex-container">
							<div class="simpleHeading">
								<h1 class="mainHeader">About <span class="primaryText">Change Catalyst Group</span></h1>
							</div>
						</div>
					</div>
				</section>
				<section id ="changeCatalystIntro" class="smallPaddedSection">
					<div class="pageWidth flex-container centerAlignedContainer">
						<div class="col50">
							<div class="blockText">
								<h2>Meet <span class="primaryText">Jean Lasee</span></h2>
								<p>
									Jean is a graduate of Fielding Graduate University in Santa Barbara, CA with a Master of Arts in Organizational Management. She worked for
									the largest consulting company in the world and led several large-scale projects that improved collaboration, communication and
									interaction among all levels in an organization. Her clients included BC Hydro, Tesoro and BP. As a result of her work, engagement,
									as well as team and organizational performance moved to higher levels. Before that time, she worked for various communication and
									training departments, accumulating over 20 years of experience. Her companies included Salt River Project and Honeywell, as well
									as her own consulting firm Lexeme Information Development. For the last five years, she has applied her skills to the sustainability
									and human well-being field. She is a Certified Sustainable Building Advisor and has consulted with Fielding Graduate University,
									Gila River Indian Community and the City of Scottsdale to improve sustainability strategy and practices.
								</p>
							</div>
						</div>
						<div id="headshot" class="col50">
							<img src="/assets/scss/wp-content/uploads/2019/10/jean-lasee-updated-headshot.jpg" class="image greenShadow">
						</div>
					</div>
				</section>
				<?php get_template_part('/inc/process'); ?>
				<?php get_template_part('/inc/services'); ?>
				<section id="recommendation" class="smallPaddedSection">
					<?php get_template_part('/inc/testimonial-2'); ?>
				</section>
			</main>
		</div>
	</div>
</div>
<?php

get_footer();
