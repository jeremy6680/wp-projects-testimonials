<?php
/**
 * Projects_TPL class
 *
 * This class is responsible for handling the template for the 'wppt_projects' custom post type.
 */
class Projects_TPL {

    /**
     * Constructor function
     *
     * This function initializes the class and adds a filter to the 'template_include' hook.
     */
    public function __construct() {
        add_filter( 'template_include', array( $this, 'projects_templates' ) );
        add_filter( 'archive_template', array( $this, 'projects_archive_templates' ) );
    }
 
    /**
     * Projects templates function
     *
     * This function checks if the current post is a 'wppt_projects' post type and returns the appropriate template.
     *
     * @param string $template The current template being used.
     * @return string The template to be used for the 'wppt_projects' post type.
     */
    public function projects_templates( $template ) {
        if ( is_singular( 'wppt_projects' ) ) {
            // Check for a child theme first
            $child_theme_template = locate_template( 'single-wppt_projects.php', false );
            if ( ! empty( $child_theme_template ) ) {
                $template = $child_theme_template;
            } else {
                // Use the template from the plugin
                $template = plugin_dir_path( dirname( __DIR__ ) ) . 'templates/single-wppt_projects.php';
            }
        }
        return $template;
    }

    /**
     * Projects archive templates function
     *
     * This function checks if the current archive is a 'wppt_projects' archive and returns the appropriate template.
     *
     * @param string $template The current template being used.
     * @return string The template to be used for the 'wppt_projects' archive.
     */
    public function projects_archive_templates( $template ) {
        if ( is_post_type_archive( 'wppt_projects' ) ) {
            // Check for a child theme first
            $child_theme_template = locate_template( 'archive-wppt_projects.php', false );
            if ( ! empty( $child_theme_template ) ) {
                $template = $child_theme_template;
            } else {
                // Use the template from the plugin
                $template = plugin_dir_path( dirname( __DIR__ ) ) . 'templates/archive-wppt_projects.php';
            }
        }
        return $template;
    }
}