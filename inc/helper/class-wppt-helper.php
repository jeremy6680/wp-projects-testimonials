<?php

class WPPT_Helper {
  public static function get_project_client_name(int $post_id): string {
    $terms = get_the_terms($post_id, 'client');
    if (!empty($terms) && !is_wp_error($terms)) {
      $client_names = array_map(fn($term) => $term->name, $terms);
      return join(", ", $client_names);
    }
    return '';
  }

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
  
} 

  