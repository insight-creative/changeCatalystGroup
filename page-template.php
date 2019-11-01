<?php
/**
 * Template Name: Interior Template
 * @package changeCatalystResponsive
 */
get_header();
?>
<div id="barba-wrapper">
	<div class="barba-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('flexible_fields') ):
			    // loop through the rows of data
			    while ( have_rows('flexible_fields') ) : the_row();
						///////////////////////////////////
						// Simple Two Column Block
						//////////////////////////////////
						if( get_row_layout() == 'two_column' ):
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
								<?php
								$col_1 = get_sub_field('col_content_1');
								$col_2 = get_sub_field('col_content_2');
								?>
								<div class="pageWidth flex-container centerAlignedContainer">
									<?php
									if( $col_1 ): ?>
										<div class="col50">
											<div class="blockText">
												<?php echo $col_1 ?>
											</div>
										</div>
									<?php endif;
									if( $col_2 ): ?>
										<div class="col50">
											<div class="blockText">
												<?php echo $col_2 ?>
											</div>
										</div>
									<?php
									endif;
									?>
								</div>
							</section>
							<?php
							///////////////////////////////////
							// Simple Three Column Block
							//////////////////////////////////
							elseif( get_row_layout() == 'three_column' ):
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
							<?php
							if(get_sub_field('section_title')):
							?>
							<div class="pageWidth">
				        <?php echo get_sub_field('section_title'); ?>
				      </div>
							<?php endif; ?>
								<?php
									$col_1 = get_sub_field('col_content_1');
									$col_2 = get_sub_field('col_content_2');
									$col_3 = get_sub_field('col_content_3');
								?>
								<div class="pageWidth flex-container">
								<?php
									if( $col_1 ): ?>
										<div class="col30">
											<div class="blockText">
												<?php echo $col_1 ?>
											</div>
										</div>
									<?php endif;
									if( $col_2 ): ?>
										<div class="col30">
											<div class="blockText">
												<?php echo $col_2 ?>
											</div>
										</div>
									<?php endif;
									if( $col_3 ): ?>
										<div class="col30">
											<div class="blockText">
												<?php echo $col_3 ?>
											</div>
										</div>
									<?php
									endif;
									?>
								</div>
							</section>
							<?php
							///////////////////////////////////
							// Simple Hero
							///////////////////////////////////
							elseif( get_row_layout() == 'simple_hero' ):
							$heroHeading = get_sub_field('hero_heading');
							$description = get_sub_field('description');
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>" class="smallPaddedSection">
								<div class="pageWidth">
									<div class="heading flex-container">
										<div class="simpleHeading">
											<?php echo $heroHeading ?>
											<?php echo $description ?>
										</div>
									</div>
								</div>
							</section>
							<?php
							///////////////////////////////////
							// Testimonial
							//////////////////////////////////
							elseif( get_row_layout() == 'testimonial' ):
							$testimonial = get_sub_field('testimonial_contents');
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection testimonial">
							  <div class="limitWidth">
							    <div class="blockText greenBorder centerText">
										<?php echo $testimonial ?>
									</div>
							  </div>
							</section>
							<?php
							////////////////////////////////////
							// Project Column Containers
							////////////////////////////////////
							elseif( get_row_layout() == 'project_columns' ):
							$project1 = get_sub_field('project1');
							$project2 = get_sub_field('project2');
							?>
							<div class="pageWidth flex-container centerAlignedContainer paddedSection">
								<div class="col50 zoomContainerWrapper">
									<a href="<?php echo $project1['project_url'] ?>">
										<div class="zoomContainer">
											<?php
											$imageID = $project1['featured_project_image']['ID'];
											echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image zoomImage', 'data-sizes' => 'auto' ) );
											?>
										</div>
										<h3><?php echo $project1['project_title'] ?></h3>
									</a>
								</div>
								<div class="col50 zoomContainerWrapper">
									<a href="<?php echo $project2['project_url'] ?>">
										<div class="zoomContainer">
											<?php
											$imageID = $project2['featured_project_image']['ID'];
											echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image zoomImage', 'data-sizes' => 'auto' ) );
											?>
										</div>
										<h3><?php echo $project2['project_title'] ?></h3>
									</a>
								</div>
							</div>
							<?php
							//////////////////////////////////
							// Full Width Image Block
							/////////////////////////////////
							elseif( get_row_layout() == 'full_width_image' ):
							?>
							<section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
								<div class="pageWidth limitWidth">
								<?php
								if (get_sub_field('full_width_image')):
									$fullWidthImage = get_sub_field('full_width_image');
									$imageID = $fullWidthImage['ID'];
									echo wp_get_attachment_image( $imageID, 'full', false, array( 'class' => 'image', 'data-sizes' => 'auto' ) );
								endif;
								?>
								</div>
							</section>
							<?php
						endif;
					endwhile;
				endif;
				?>
			</main>
		</div>
	</div>
</div>
<?php
get_footer();
