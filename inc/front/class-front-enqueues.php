<?php
/**
 * Front_Enqueues class handles enqueuing of styles and scripts for the front-end of the website.
 */
class Front_Enqueues {
    
    /**
     * Constructor function that adds actions to enqueue styles and scripts.
     */
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    /**
     * Enqueue styles function that checks if Bootstrap is already enqueued and enqueues the Bootstrap stylesheet and custom stylesheet.
     */
    public function enqueue_styles() {
        if ( is_singular( 'wppt_projects' ) || is_post_type_archive( 'wppt_projects' ) ) {
            // Check if Bootstrap is already enqueued
            if ( ! wp_style_is( 'bootstrap', 'enqueued' ) ) {
                // Enqueue the Bootstrap stylesheet
                wp_enqueue_style( 'wppt-style', WPPT_PLUGIN_URL . 'assets/css/bootstrap/bootstrap.min.css', array(), '1.0.0', 'all' );
            }
            wp_enqueue_style( 'wppt-style', WPPT_PLUGIN_URL . 'assets/css/style.css', array(), '1.0.0', 'all' );
        }
    }

    /**
     * Enqueue scripts function that enqueues custom scripts for the front-end of the website.
     */
    public function enqueue_scripts() {
        if (  is_singular( 'wppt_projects' ) || is_post_type_archive( 'wppt_projects' ) ) {
            wp_enqueue_script( 'wppt-scripts', WPPT_PLUGIN_URL . 'assets/js/scripts.js', array( 'jquery' ), '1.0.0', true );
        }
    }

}