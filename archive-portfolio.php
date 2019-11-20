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
         <h2>Some of our Clients</h2>
       </div>
         <div class="pageWidth flex-container">
           <div class="col30">
             <div class="blockText">
               <p>
                 <img src="/assets/scss/wp-content/uploads/2019/11/smart-pad-living-logo-square.jpg" class="responsiveImage">
               </p>
               <h3>Smart Pad Living</h3>
             </div>
           </div>
           <div class="col30">
             <div class="blockText">
               <p>
                 <img src="/assets/scss/wp-content/uploads/2019/11/fielding-logo-square.jpg" class="responsiveImage">
               </p>
               <h3>Fielding Graduate University</h3>
             </div>
           </div>
           <div class="col30">
             <div class="blockText">
               <p>
                 <img src="/assets/scss/wp-content/uploads/2019/11/transpolis-logo-square.jpg" class="responsiveImage">
               </p>
               <h3>Transpolis</h3>
             </div>
           </div>
         </div>
       </section>
       <div class="pageWidth centerText">
         <h1>Projects</h1>
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
