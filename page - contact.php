<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
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

						<div class="homeHeading flex-container">

							<div class="col50">

								<div class="heroHeading">

									<h1 id="mainHeader">Is Your Organization Ready for <span class="primaryText">Change</span>?</h1>

									<p>In these fast-moving times, change is part of organizational life. Continuous improvement and innovation are key to moving forward and
										staying competitive.</p>

								</div>

							</div>

							<div class="col50 heroImageWrapper">

								<img src="/assets/scss/wp-content/uploads/2019/01/iStock-sustainable-world-color-edit-with-background.svg" id="heroImage">

							</div>

						</div>

					</div>

				</section>

				<section id ="contactContent">

					<div id="contactWrap">

						<div class="pageWidth flex-container">

							<div id="formWrap" class="col60">

								<h4 class="redText">Contact Change Catalyst Group</h4>

								<p>
								The Change Catalyst Group assists our clients in embracing change to create a better, achievable future.
								</p>

								<h3 class="">Call us at <a class="plainLink" href="tel:(480)695-1959">(480)695-1959</a></h3>

								<p>Or fill out the form below and we'll get back to you as soon as we can!</p>

								<?php echo do_shortcode('[caldera_form id="CF5c4a2fc8374cd"]'); ?>

							</div>

						</div>

					</div>

				</section>

		</main>

	</div>

</div>

</div>
<?php

get_footer();
