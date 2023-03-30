<?php
get_header(); 
?>

<section class="py-24 bg-white position-relative">
  <div class="position-relative container" style="z-index: 1;">
    <span class="text-uppercase text-primary fw-bold">Case study</span>
    <h1 class="mb-0 lh-sm" contenteditable="false"><?php the_title(); ?></h1>
  </div>
</section>

<?php
  /**
   * Retrieves the current post ID and the corresponding client details
   * to display in a client card.
   *
   * @global $post WP_Post object representing the current post
   *
   * @return void
   */
  $post_id = get_the_ID();
  $term_id = WPPT_Helper::get_project_client_id( $post_id );
  $client_details = WPPT_Helper::get_client_details( $term_id );

  if (!empty($client_details)) {  
    wppt_get_template_part('templates/partials/client', 'template', $client_details);
  } 
?>


        
      <section class="py-24 pt-md-48 text-white overflow-hidden">
        <div class="container">
          <div class="bg-dark pb-24 pt-16 ms-auto position-relative">
            <div class="position-xl-absolute start-0 mt-n40 ms-xl-n52">
              <img class="img-fluid d-block mx-auto mw-sm" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/features/features-women.png" alt="">
            </div>
            <div class="mw-md-lg d-none d-xl-block px-64 py-80 bg-primary-light position-xl-absolute top-0 end-0 me-xl-n52 mt-n48" style="z-index: -1;"></div>
            <div class="mw-3xl mw-xl-5xl mx-auto ms-xl-auto me-xl-n20 mt-12 mt-xl-0 px-10 px-xl-32">
              <div class="row justify-content-xl-end">
                <div class="col-12 col-md-8 col-xl-10">
                  <h2 class="text-white lh-base font-heading">Lorem ipsum dolor sit amet conscetutar domor at elis</h2>
                </div>
              </div>
              <div class="row justify-content-end mt-12">
                <div class="col-12 col-md-6 col-xl-5 mb-10">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/icons/document-clean.svg" alt="">
                  <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Challenge</h5>
                  <p class="lead lh-lg mt-6 text-muted">Take care to develop resources continually and integrity them with previous projects.</p>
                </div>
                <div class="col-12 col-md-6 col-xl-5 mb-10">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/icons/check-circle.svg" alt="">
                  <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Approach</h5>
                  <p class="lead lh-lg mt-6 text-muted">Take care to develop resources continually and integrity them with previous projects.</p>
                </div>
                <div class="col-12 col-md-6 col-xl-5 mb-10 mb-lg-0">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/icons/filters-1.svg" alt="">
                  <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Solution</h5>
                  <p class="lead lh-lg mt-6 text-muted">Take care to develop resources continually and integrity them with previous projects.</p>
                </div>
                <div class="col-12 col-md-6 col-xl-5">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/icons/users.svg" alt="">
                  <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The results</h5>
                  <p class="lead lh-lg mt-6 text-muted">Take care to develop resources continually and integrity them with previous projects.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        
      <section class="py-28 position-relative">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-lg-0">
              <div class="position-relative">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/stats/background1.png" alt="">
                </div>
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                  <p class="mb-1 fw-bold text-primary small">Subscribers</p>
                  <h2 class="mb-0 lh-sm">12 350</h2>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-lg-0">
              <div class="position-relative">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/stats/background4.png" alt="">
                </div>
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                  <p class="mb-1 fw-bold text-secondary small">Projects</p>
                  <h2 class="mb-0 lh-sm">5 065</h2>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-sm-0">
              <div class="position-relative">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/stats/background3.png" alt="">
                </div>
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                  <p class="mb-1 fw-bold text-danger small">Files</p>
                  <h2 class="mb-0 lh-sm">12 350</h2>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <div class="position-relative">
                <div class="d-flex justify-content-center">
                  <img class="img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/stats/background2.png" alt="">
                </div>
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                  <p class="mb-1 fw-bold text-warning small">Tasks</p>
                  <h2 class="mb-0 lh-sm">12 350</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  <?php
  /**
   * Retrieves the testimonial details for a project.
   *
   * @param int $post_id The ID of the project post.
   *
   * @return array An array of testimonial details.
   */

  $testimonial_details = WPPT_Helper::get_project_testimonial_details($post_id);

  /**
    * Checks if the testimonial details array is not empty and if the checkbox is checked.
    * If not empty or if is checked, displays the client testimonial section and passes the testimonial details to the testimonial template.
    */
  $display_testimonials = get_option('wppt-display-testimonials');
  if (!empty($testimonial_details) && $display_testimonials) { ?>
  <?php
  $args = array(
    'testimonial_text' => isset($testimonial_details['textarea_text']) ? esc_html($testimonial_details['textarea_text']) : '',
    'author_name' => isset($testimonial_details['text_author']) ? esc_html($testimonial_details['text_author']) : '',
    'author_job' => isset($testimonial_details['text_job']) ? esc_html($testimonial_details['text_job']) : '',
    'author_picture' => isset($testimonial_details['media_picture']) ? $testimonial_details['media_picture'] : ''
  );
  
    wppt_get_template_part('templates/partials/testimonial', 'template', $args);
  } ?>
 
        








<?php
  /**
   * This code includes a WordPress template part for a project.
   *
   * @param string $template The name of the template file to include.
   * @param string $slug     The slug of the template file to include.
   *
   * @return void
   */
   wppt_get_template_part('templates/partials/project', 'template' ); 
?>
	
 
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