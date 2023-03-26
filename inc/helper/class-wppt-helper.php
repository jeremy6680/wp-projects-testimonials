<?php
/**
 * WPPT_Helper class contains static methods for retrieving project and client information.
 */
class WPPT_Helper {

  /**
   * Retrieves the client name(s) associated with a project.
   *
   * @param int $post_id The ID of the project post.
   * @return string The name(s) of the client(s) associated with the project, separated by commas.
   */
  public static function get_project_client_name(int $post_id): string {
    $terms = get_the_terms($post_id, 'client');
    if (!empty($terms) && !is_wp_error($terms)) {
      $client_names = array_map(fn($term) => $term->name, $terms);
      return join(", ", $client_names);
    }
    return '';
  }

  /**
   * Retrieves details about a client.
   *
   * @param int $term_id The ID of the client term.
   * @return array An array containing the client's name, description, industry, website, and size.
   */
  public static function get_client_details(int $term_id): array {
    $term = get_term($term_id, 'client');
    if (!$term || is_wp_error($term)) {
      return [];
    }
    return [
      'name' => $term->name,
      'description' => term_description($term_id, 'client'),
      'industry' => get_term_meta($term_id, 'industry', true),
      'website' => get_term_meta($term_id, 'website', true),
      'size' => get_term_meta($term_id, 'size', true),
    ];
  }

  public static function get_project_testimonial_details($post_id) {
    $client_id = self::get_project_client_id($post_id);
    $testimonials = self::get_client_testimonials($client_id);

    if (!empty($testimonials)) {
      // if there are testimonials for the client, return the first one
      return self::get_testimonial_details($testimonials[0]->ID);
    } else {
      // if there are no testimonials for the client, return an empty array
      return array();
    }
  }

  private static function get_project_client_id($post_id) {
    $client_id = 0;
    $terms = get_the_terms($post_id, 'client');
    if ($terms && !is_wp_error($terms)) {
      $client_id = $terms[0]->term_id;
    }
    return $client_id;
  }

  private static function get_client_testimonials($client_id) {
    $testimonials = array();
    if ($client_id) {
      $testimonials = get_posts(array(
        'post_type' => 'wppt_testimonials',
        'tax_query' => array(
          array(
            'taxonomy' => 'client',
            'field' => 'term_id',
            'terms' => $client_id
          )
        )
      ));
    }
    return $testimonials;
  }

  private static function get_testimonial_details($post_id) {
    $testimonial = array(
      'text_author' => get_post_meta($post_id, 'text_author', true),
      'text_job' => get_post_meta($post_id, 'text_job', true),
      'media_picture' => wp_get_attachment_image_src(get_post_meta($post_id, 'media_picture', true), 'full')[0],
      'textarea_text' => get_post_meta($post_id, 'textarea_text', true)
    );
    return $testimonial;
  }
  
}
  