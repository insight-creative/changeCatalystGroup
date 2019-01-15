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

				<section>

					<div class="hero shopHero">

						<div class="heroOverlay">

							<div class="heroHeadingWrap fullWidth">

								<div class="col50">

									<div class="homeHeading">

										<div class="heroHeading">

											<h1 class="whiteText">Contact Us</h1>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id ="contactContent">

					<div id="contactWrap">

						<div class="pageWidth flex-container">

							<div id="formWrap" class="col60">

								<h4 class="redText">Contact Arden's Automotive Hospital</h4>

								<p>
								Have some questions that you still need help with? We're here to help.
								</p>

								<h3 class="redText">Call us at <a class="plainLink" href="tel:(920)203-3694">(920)203-3694</a></h3>

								<p>Or fill out the form below and we'll get back to you as soon as we can!</p>

								<?php echo do_shortcode('[caldera_form id="CF5c3c73e0407dd"]'); ?>

							</div>

							<div class="col40">

								<div class="smallMapWrapper">

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2869.495470991913!2d-88.55277408449062!3d44.01115477911062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803ebf8a244848f%3A0xab246929a6800b92!2sArden&#39;s+Automotive+Hospital+LLC!5e0!3m2!1sen!2sus!4v1547465257974" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

								</div>

								<div>

									<div class="locationContent">

										<h5>Arden's Automotive Hospital</h5>

										<a class="plainLink" target="_blank" href="https://www.google.com/maps/place/Arden's+Automotive+Hospital+LLC/@44.0111548,-88.5527741,17z/data=!3m1!4b1!4m5!3m4!1s0x8803ebf8a244848f:0xab246929a6800b92!8m2!3d44.0111548!4d-88.5505854">

										<p>510 W 8th Ave<br>

										Oshkosh, WI 54902</p></a>

										<a class="plainLink" href="tel:(920)203-3694">(920)203-3694</a>

										<br>

									</div>

								</div>

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
