<?php
// check if the flexible content field has rows of data
if( have_rows('flexible_fields') ):
  // loop through the rows of data
  while ( have_rows('flexible_fields') ) : the_row();
      ///////////////////////////////////
      // Simple Three Column Block
      //////////////////////////////////
      if( get_row_layout() == 'three_column' ):
      ?>
      <div class="pageWidth">
        <?php echo get_sub_field('section_title', 'option'); ?>
      </div>
      <section id="<?php echo get_sub_field('section_name'); ?>" class="paddedSection">
        <?php
          $col_1 = get_sub_field('col_content_1', 'option');
          $col_2 = get_sub_field('col_content_2', 'option');
          $col_3 = get_sub_field('col_content_3', 'option');
        ?>
        <div class="pageWidth flex-container paddedTop">
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
    endif;
  endwhile;
endif;
?>
<section id="uniqueProcess" class="smallPaddedSection">
  <div class="pageWidth">
    <h2 class="centerText">Our <span class="primaryText">Unique Process</span></h2>
  </div>
  <div class="pageWidth flex-container">
    <div class="col30 centerText">
      <div class="smallPaddedWrapper">
        <div class="illustrationWrapper">
          <img src="/assets/scss/wp-content/uploads/2019/01/undraw_people_search_edited-1.svg" class="illustration">
        </div>
        <h4 class="processHeader">Research</h4>
        <p class="leftText">
          Gather history of previous change efforts. Ask about accomplishments and achievements. Inquire as to lessons learned and what could have made the transition more successful, if any. Determine if the team wants to pursue additional outcomes from these efforts before moving on to a new strategy.
        </p>
      </div>
    </div>
    <div class="col30 centerText">
      <div class="smallPaddedWrapper">
        <div class="illustrationWrapper">
          <img src="/assets/scss/wp-content/uploads/2019/01/interviewWithSpace-1.svg" class="illustration">
        </div>
        <h4 class="processHeader">Interview</h4>
        <p class="leftText">
          Select members of all the areas that are involved with change. Discuss their current mindset including viewpoints, issues and questions. Discover what improvements they want to happen. Carefully listen to all representatives, so they feel included in the change.
        </p>
      </div>
    </div>
    <div class="col30 centerText">
      <div class="smallPaddedWrapper">
        <div class="illustrationWrapper">
          <img src="/assets/scss/wp-content/uploads/2019/01/undraw_prototyping_process_rswj-edited-1.svg" class="illustration">
        </div>
        <h4 class="processHeader">Development</h4>
        <p class="leftText">
          Create simple, straightforward and frequent communications based on what was learned from the interviews. Include how the transition
          will specifically affect each group, as well as what they are responsible for accomplishing. Seeing specific values, thoughts and ideas
          mentioned in communications will make members feel valued.
        </p>
      </div>
    </div>
  </div>
</section>
