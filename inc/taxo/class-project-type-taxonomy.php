<?php
class ProjectType_Taxonomy {
    public function __construct() {
        add_action( 'init', array( $this, 'register_taxonomy' ) );
    }

    public function register_taxonomy() {
        $labels = array(
        'name'              => _x( 'Project Types', 'taxonomy general name', 'wppt-plugin' ),
        'singular_name'     => _x( 'Project Type', 'taxonomy singular name', 'wppt-plugin' ),
        'search_items'      => __( 'Search Project Types', 'wppt-plugin' ),
        'all_items'         => __( 'All Project Types', 'wppt-plugin' ),
        'parent_item'       => __( 'Parent Project Type', 'wppt-plugin' ),
        'parent_item_colon' => __( 'Parent Project Type:', 'wppt-plugin' ),
        'edit_item'         => __( 'Edit Project Type', 'wppt-plugin' ),
        'update_item'       => __( 'Update Project Type', 'wppt-plugin' ),
        'add_new_item'      => __( 'Add New Project Type', 'wppt-plugin' ),
        'new_item_name'     => __( 'New Project Type Name', 'wppt-plugin' ),
        'menu_name'         => __( 'Project Type', 'wppt-plugin' ),
        );

        $args = array(
        'labels' => $labels,
        'description' => __( '', 'wppt-plugin' ),
        'hierarchical' => true,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_tagcloud' => false,
        'show_in_quick_edit' => false,
        'show_admin_column' => true,
        'show_in_rest' => false,
        'rewrite' => false,
        );

        register_taxonomy( 'project_type', array('wppt_projects'), $args );

    }

}