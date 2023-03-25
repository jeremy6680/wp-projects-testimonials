<?php

class WPPT_Helper {
    public static function get_project_client_name($post_id) {
      $terms = get_the_terms($post_id, 'client');
      if ($terms && !is_wp_error($terms)) :
        $client_names = array_map(function ($term) {
          return $term->name;
        }, $terms);
        return join(", ", $client_names);
      endif;
      return '';
    }
  }
  