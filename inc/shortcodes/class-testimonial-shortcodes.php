<?php

class Testimonial_Shortcodes {
    public function __construct() {
        add_shortcode( 'wppt_testimonial', array( $this, 'testimonial_shortcode' ) );
    }

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
        $author_picture = wp_get_attachment_image( get_post_meta( $testimonial->ID, 'media_picture', true ), 'thumbnail' );
        $testimonial_text = get_post_meta( $testimonial->ID, 'textarea_text', true );

        // Build the testimonial card HTML
        $html = '<div class="client-quote">';
        $html .= '<div class="quote-holder">';
        $html .= '<blockquote class="quote-content">' . $testimonial_text . '</blockquote';
        $html .= '</div>';
        $html .= '<div class="source-holder">';
        $html .= '<div class="source-profile">' . $author_picture . '</div>';
        $html .= '<div class="meta">';
        $html .= '<div class="name">' . $author_name . '</div>';
        $html .= '<div class="info">' . $author_job . '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';

        return $html;
    }
}
