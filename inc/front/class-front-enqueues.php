<?php

class Front_Enqueues {
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
    }

    public function enqueue_styles() {
        if ( is_singular( 'wppt_projects' ) || is_post_type_archive( 'wppt_projects' ) ) {
            wp_enqueue_style( 'wppt-style', WPPT_PLUGIN_URL . 'assets/css/style.css', array(), '1.0.0', 'all' );
        }
    }
}