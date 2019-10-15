<?php
/**
 * @package changeCatalystResponsive
 */
get_header();

?>
<div id="barba-wrapper">
	<div class="barba-container">
		<div id="primary" class="content-area limitWidth">
			<main id="main" class="site-main">
				<section class="smallPaddedSection">
					<div class="heading simpleHeading">
						<h1 class="mainHeader">Is Your Organization Ready for <span class="primaryText">Change</span>?</h1>
						<p>In these fast-moving times, change is part of organizational life. Continuous improvement and innovation are key to moving forward and
							staying competitive.</p>
					</div>
				</section>
				<section id ="contactContent">
					<div id="contactWrap">
						<div id="formWrap">
							<h4 class="redText">Contact Change Catalyst Group</h4>
							<p>
							The Change Catalyst Group assists our clients in embracing change to create a better, achievable future.
							</p>
							<h3 class="">Call us at <a class="plainLink" href="tel:(480)695-1959">(480)695-1959</a></h3>
							<p>Or fill out the form below and we'll get back to you as soon as we can!</p>
							<?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]'); ?>
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
</div>
<?php

get_footer();
