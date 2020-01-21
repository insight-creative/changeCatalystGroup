<?php
/**
* The template for displaying archive pages
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
       <section id="clientLogos" class="paddedSection paddedTop">
         <div class="pageWidth">
           <h1>Some of our Clients</h1>
         </div>
         <div class="pageWidth flex-container">
           <div class="col30">
             <div class="blockText">
               <img src="/assets/scss/wp-content/uploads/2019/11/smart-pad-living-logo-square.jpg" class="responsiveImage">
               <p>Developed a six-year community development strategy that educated clients on how buildings would impact lifestyles and health of the people who inhabited them.</p>
               <p>
                 <a href="/projects/microloft-project/" class="plainLink">View the project</a>
               </p>
             </div>
           </div>
           <div class="col30">
             <div class="blockText">
               <img src="/assets/scss/wp-content/uploads/2019/11/fielding-logo-square.jpg" class="responsiveImage">
               <p>Collaborated with the Working Group for five years to advance the university’s sustainability strategy, culminating in creating a panel discussion.</p>
               <p>
                 <a href="/projects/fielding-graduate-university-event/" class="plainLink">View the project</a>
               </p>
             </div>
           </div>
           <div class="col30">
             <div class="blockText">
               <img src="/assets/scss/wp-content/uploads/2019/11/transpolis-logo-square.jpg" class="responsiveImage">
               <p>Consulted with various members of the Gila River Indian Community in developing an innovation park that would include post high school engineering education and apprenticeship programs, labs for rapid prototyping, 3D printing, 5-Axis CNC machine tools, and advanced manufacturing.</p>
               <p>
                 <a href="/projects/innovation-park/" class="plainLink">View the project</a>
               </p>
             </div>
           </div>
         </div>
       </section>
       <div class="pageWidth centerText">
         <h2>Projects</h2>
       </div>
       <div class="pageWidth flexContainerWrapped centerAlignedContainer paddedSection">
         <?php
      	 query_posts(array(
      	 	'post_type' => 'portfolio',
          'order' => 'ASC'
      	 ));
      	 while (have_posts()) : the_post(); ?>
         <div class="zoomContainerWrapper">
            <a href="<?php the_permalink(); ?>">
              <div class="zoomContainer">
                <?php changecatalystresponsive_post_thumbnail(); ?>
              </div>
              <h3><?php the_title(); ?></h3>
            </a>
          </div>
      	 <?php endwhile;
      	 ?>
       </div>

     </main>
   </div>
 </div>
</div>
<?php
get_footer();
