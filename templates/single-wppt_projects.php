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
  } 
?>
	
<?php
  /**
    * Checks if the CTA checkbox is checked.
    * If is checked, displays the cta section.
    */
  $display_cta = get_option('wppt-display-cta');
  if (!empty($display_cta)) { 
    wppt_get_template_part('templates/partials/cta', 'template');
  } 
?>

<?php get_footer();