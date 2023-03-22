<?php

class Testimonials_Admin {
    public function __construct() {
        add_filter( 'the_title', array( $this, 'wppt_testimonials_title' ), 10, 2 );
        add_filter( 'manage_wppt_testimonials_posts_columns', array( $this, 'add_shortcode_column' ) );
        add_action( 'manage_wppt_testimonials_posts_custom_column', array( $this, 'display_shortcode_column_content' ), 10, 2 );
    }

    public function wppt_testimonials_title( $title, $post_id ) {
        if ( get_post_type( $post_id ) == 'wppt_testimonials' ) {
          $text_author = get_post_meta( $post_id, 'text_author', true );
          if ( ! empty( $text_author ) ) {
            $title = $text_author;
          }
        }
        return $title;
    }

    public function add_shortcode_column( $columns ) {
        $columns['shortcode'] = __( 'Shortcode', 'wppt-testimonials' );
        return $columns;
    }

    public function display_shortcode_column_content( $column_name, $post_id ) {
        if ( $column_name == 'shortcode' ) {
            echo '[wppt_testimonial id="' . $post_id . '"]';
        }
    }
}