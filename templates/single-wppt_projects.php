<?php
get_header(); 
?>

<div class="hero hero-sm bg-dark">
  <div class="hero-body container">
    <h1>Case Study: <?php the_title(); ?></h1>
    <p class="lead"><?php the_excerpt(); ?></p>
  </div>
</div>


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

  /**
   * This code includes a WordPress template part for a project.
   *
   * @param string $template The name of the template file to include.
   * @param string $slug     The slug of the template file to include.
   *
   * @return void
   */
   wppt_get_template_part('templates/partials/project', 'template' ); 

  /**
   * Retrieves the testimonial details for a project.
   *
   * @param int $post_id The ID of the project post.
   *
   * @return array An array of testimonial details.
   */

  $testimonial_details = WPPT_Helper::get_project_testimonial_details($post_id);
  $display_testimonials = get_option('wppt-display-testimonials');

  /**
    * Checks if the testimonial details array is not empty and if the checkbox is checked.
    * If not empty or if is checked, displays the client testimonial section and passes the testimonial details to the testimonial template.
    */
  
  if (!empty($testimonial_details) && $display_testimonials) { ?>
    <div class="project-section mb-5 container">
      <h3 class="project-section-title mb-3">Client Testimonial</h3>
    </div><!--//project-section-->
  <?php
  $args = array(
    'testimonial_text' => isset($testimonial_details['textarea_text']) ? esc_html($testimonial_details['textarea_text']) : '',
    'author_name' => isset($testimonial_details['text_author']) ? esc_html($testimonial_details['text_author']) : '',
    'author_job' => isset($testimonial_details['text_job']) ? esc_html($testimonial_details['text_job']) : '',
    'author_picture' => isset($testimonial_details['media_picture']) ? $testimonial_details['media_picture'] : ''
  );
  
  wppt_get_template_part('templates/partials/testimonial', 'template', $args);
  } ?>
	    
<section class="promo-section bg-dark py-5 my-48 text-center">
  <div class="container mx-auto max-width-lg">
    <h2 class="title text-light">Want me to help with your project?</h2>
    <p class="text-light">If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
    <div class="text-center"><a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a></div>
  </div><!--//container-->
</section><!--//promo-section--> 

<?php get_footer();