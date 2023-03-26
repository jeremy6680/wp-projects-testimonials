<?php
/**
 * Testimonial_Shortcodes class
 *
 * This class defines the shortcode for displaying testimonials.
 */
class Testimonial_Shortcodes {
    /**
     * Constructor function
     *
     * This function adds the shortcode to WordPress.
     */
    public function __construct() {
        add_shortcode( 'wppt_testimonial', array( $this, 'testimonial_shortcode' ) );
    }

    /**
     * Testimonial shortcode function
     *
     * This function retrieves the testimonial post by ID and displays its content.
     *
     * @param array $atts Shortcode attributes
     * @return string Testimonial HTML
     */
    public function testimonial_shortcode( $atts ) {
        // Shortcode attributes
        $atts = shortcode_atts( array(
            'id' => null,
        ), $atts, 'wppt_testimonial' );

        // Get the testimonial post by ID
        $testimonial = get_post( $atts['id'] );

        // If no post is found, return nothing
        if ( ! $testimonial ) {
            return '';
        }

        // Get the testimonial meta data
        $author_name = get_post_meta( $testimonial->ID, 'text_author', true );
        $author_job = get_post_meta( $testimonial->ID, 'text_job', true );
        $author_picture = wp_get_attachment_image_src(get_post_meta($testimonial->ID, 'media_picture', true), 'medium')[0];
        $testimonial_text = get_post_meta( $testimonial->ID, 'textarea_text', true );

        // Set up the arguments to pass to the template
        $args = array(
            'testimonial_text' => $testimonial_text,
            'author_name' => $author_name,
            'author_job' => $author_job,
            'author_picture' => $author_picture,
        );

        // Get the testimonial template
        $template = 'templates/partials/testimonial';

        // Build the testimonial HTML using the template
        $html = wppt_get_template_part( $template, 'template', $args );

        return $html;
    }
}