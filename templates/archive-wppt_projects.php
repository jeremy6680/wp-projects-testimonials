<?php

get_header(); ?>
 
 <section class="py-24 bg-white position-relative">
  <div class="position-relative container" style="z-index: 1;">
    <div>
      <span class="text-uppercase text-primary fw-bold">Our works</span>
      <h1 class="mb-0 lh-sm"><?php echo get_the_archive_title(); ?></h1>
      <ul class="mt-16 list-unstyled mb-8 d-md-flex flex-wrap">
        <?php echo WPPT_Helper::generate_project_type_filter_buttons(); ?>
      </ul>
    </div>

          <?php
        if ( have_posts() ) : ?>

        <div class="row my-shuffle shuffle">
          <?php
          while ( have_posts() ) :
              the_post(); ?>
          
              <?php
                /**
                 * This code includes a WordPress template part for a project tease.
                 *
                 * @param string $template The name of the template file to include.
                 * @param string $slug     The slug of the template file to include.
                 *
                 * @return void
                 */
                wppt_get_template_part('templates/partials/project-tease', 'template' ); 
                ?>
          
          <?php
          endwhile; ?>
        </div>
        <?php 
        else:
        // If no content, display a message
        endif;
      ?>
  
  </div>
  <div class="p-20 p-md-40 position-absolute mt-80 top-0 end-0 bg-warning-light"></div>
  <div class="p-20 p-md-40 position-absolute mb-48 bottom-0 end-0 bg-info-light"></div>
  <div class="p-20 p-md-40 position-absolute mb-48 top-50 start-0 translate-middle-y mt-12 bg-secondary-light"></div>
</section>

  <?php
  /**
    * Checks if the CTA checkbox is checked.
    * If is checked, displays the cta section.
    */
  $display_cta = get_option('wppt-display-cta');
  if (!empty($display_cta)) { 
    wppt_get_template_part('templates/partials/cta', 'template');
  } ?>

<?php get_footer();