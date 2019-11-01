<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package changeCatalystResponsive
 */
get_header();

?>
<div id="barba-wrapper">
	<div class="barba-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<section id="hero" class="smallPaddedSection">
					<div class="pageWidth">
						<div class="heading flex-container">
							<div class="col50">
								<div class="heroHeading">
									<h1 class="mainHeader">Developing <span class="primaryText">Organization Resilience</span> Through Proven <span class="primaryText">Sustainability Practices</span></h1>
									<p>In these fast-moving times, change is part of organizational life. Continuous improvement and innovation are key to moving forward and staying competitive.</p>
								</div>
							</div>
							<div class="col50 heroImageWrapper">
								<img src="/assets/scss/wp-content/uploads/2019/01/iStock-sustainable-world-color-edit-with-background.svg" id="heroImage">
							</div>
						</div>
					</div>
				</section>
				<section id ="changeCatalystIntro" class="smallPaddedSection">
					<div class="pageWidth flex-container centerAlignedContainer">
						<div class="col50">
							<div class="blockText">
								<h2>Assisting Clients with <span class="primaryText">Change</span></h2>
								<h3>The Change Catalyst Group assists our clients in embracing change to create a better, achievable future.</h3>
								<p>
									By using empathetic listening, we address change throughout the organization to make sure people are committed and inspired. We guide your members including leadership, management and staff toward the understanding and alignment of your organization’s vision for the future.
								</p>
							</div>
						</div>
						<div class="col50">
							<img src="/assets/scss/wp-content/uploads/2019/01/organizationalChange.jpg" class="image greenShadow">
						</div>
					</div>
				</section>
				<?php get_template_part('/inc/process'); ?>
				<?php get_template_part('/inc/services'); ?>
				<section id="recommendation" class="smallPaddedSection">
					<?php get_template_part('/inc/testimonial-1'); ?>
				</section>
				<section id ="humanCatalysts" class="smallPaddedSection">
					<div class="pageWidth flex-container centerAlignedContainer">
						<div class="col50">
							<div class="blockText">
								<h2>Human <span class="primaryText">Catalysts</span></h2>
								<p>Once your team members reach a designated level of commitment, they must take the appropriate actions, moving themselves and the organization toward
									greater success.  As human catalysts, the Change Catalyst Group accelerates the process of moving organizations through the change they face with better
									results and more positive outcomes than on their own.</p>
								<a href="/about/"><button class="primaryButton">Learn More About Us <i class="fas fa-arrow-right arrowIcon"></i></button></a>
							</div>
						</div>
						<div class="col50">
							<img src="/assets/scss/wp-content/uploads/2019/01/humanCatalysts.jpg" class="image greenShadow">
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
</div>
<?php

get_footer();
