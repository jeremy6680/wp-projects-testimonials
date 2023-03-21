<?php
/*
Plugin Name: WP Projects and Testimonials
Description: Plugin generating the following custom post types: Projects & Testimonials
Version: 0.1
Author: Jeremy Marchandeau
Author URI: https://jeremymarchandeau.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-projects-testimonials
Domain Path: /languages
*/
    
// Define the custom post type "Projects"
require_once plugin_dir_path( __FILE__ ) . 'inc/class-projects-cpt.php';
$projects_cpt = new Projects_CPT();

// Define the custom post type "Testimonials"
require_once plugin_dir_path( __FILE__ ) . 'inc/class-testimonials-cpt.php';
$testimonials_cpt = new Testimonials_CPT();

// Define the custom taxonomy "Client"
require_once plugin_dir_path( __FILE__ ) . 'inc/class-client-taxonomy.php';
$client_taxonomy = new Client_Taxonomy();

// Load the ProjectMetabox class
require_once( plugin_dir_path( __FILE__ ) . 'inc/class-project-metabox.php' );
$project_metabox = new ProjectMetabox();

// Load the TestimonialMetabox class
require_once( plugin_dir_path( __FILE__ ) . 'inc/class-testimonial-metabox.php' );
$testimonial_metabox = new TestimonialMetabox();