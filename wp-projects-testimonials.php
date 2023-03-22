<?php
/*
Plugin Name: WP Projects and Testimonials
Description: Plugin generating the following custom post types: Projects & Testimonials
Version: 0.1
Author: Jeremy Marchandeau
Author URI: https://jeremymarchandeau.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wppt-plugin
Domain Path: /languages
*/

// 1. Constants and Plugin Activation/Deactivation
define( 'WPPT_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'WPPT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

register_activation_hook( __FILE__, 'wppt_activate' );
function wppt_activate() {
    // Code to run on activation
}

register_deactivation_hook( __FILE__, 'wppt_deactivate' );
function wppt_deactivate() {
    // Code to run on deactivation
}

// 2. Custom Post Types
require_once WPPT_PLUGIN_PATH . 'inc/cpt/class-projects-cpt.php';
require_once WPPT_PLUGIN_PATH . 'inc/cpt/class-testimonials-cpt.php';
$projects_cpt = new Projects_CPT();
$testimonials_cpt = new Testimonials_CPT();

// 3. Custom Taxonomies
require_once WPPT_PLUGIN_PATH . 'inc/taxo/class-client-taxonomy.php';
$client_taxonomy = new Client_Taxonomy();

// 4. Metaboxes
require_once WPPT_PLUGIN_PATH . 'inc/metaboxes/class-project-metabox.php';
require_once WPPT_PLUGIN_PATH . 'inc/metaboxes/class-testimonial-metabox.php';
$project_metabox = new ProjectMetabox();
$testimonial_metabox = new TestimonialMetabox();

// 5. Settings
require_once WPPT_PLUGIN_PATH . 'inc/admin/class-projects-settings.php';
$projects_settings = new Projects_Settings();

// 6. Templates
require_once WPPT_PLUGIN_PATH . 'inc/front/class-projects-tpl.php';
$projects_templates = new Projects_TPL();

// 7. Shortcodes
require_once WPPT_PLUGIN_PATH . 'inc/shortcodes/class-testimonial-shortcodes.php';
$testimonial_shortcodes = new Testimonial_Shortcodes();

// 8. Admin
require_once WPPT_PLUGIN_PATH . 'inc/admin/class-testimonials-admin.php';
$testimonial_admin = new Testimonials_Admin();




