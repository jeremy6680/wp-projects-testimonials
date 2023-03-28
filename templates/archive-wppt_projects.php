<?php

get_header(); ?>
 
 <div class="hero hero-sm bg-dark">
  <div class="hero-body container">
    <h1><?php echo get_the_archive_title(); ?></h1>
    <p class="lead">Project intro goes here. In the intro it's a good idea to answer a potential client's need/problem so it's more likely to land your next project or job.</p>
  </div>
</div>



 <div class="container">
    <div class="columns">
      <div class="column col-12">
        <div class="filter-buttons btn-group">
          <?php echo WPPT_Helper::generate_project_type_filter_buttons(); ?>
        </div><!--//filter-buttons-->
      </div>
    </div>
    <div class="columns projects-grid">

      <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
              the_post(); ?>
            <div class="column col-4 project <?php
              $project_type_slugs = WPPT_Helper::get_project_type_terms( get_the_ID() );
              if ( ! empty( $project_type_slugs ) ) {
                  echo esc_html( implode( ', ', $project_type_slugs ) );
              }
              ?>">
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
            </div>
          <?php
          endwhile;
        else:
        // If no content, display a message
        endif;
      ?>

    </div>
  </div>

<?php get_footer();