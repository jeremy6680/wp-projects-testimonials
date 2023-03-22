<?php
class Testimonials_CPT {
  function __construct() {
    add_action( 'init', array( $this, 'register_custom_post_type' ) );
  }

  function register_custom_post_type() {
    $labels = array(
      'name'                  => _x( 'Testimonials', 'Post Type General Name', 'wp-projects-testimonials' ),
      'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'wp-projects-testimonials' ),
      'menu_name'             => __( 'Testimonials', 'wp-projects-testimonials' ),
      'name_admin_bar'        => __( 'Testimonials', 'wp-projects-testimonials' ),
      'archives'              => __( 'Testimonials Archive', 'wp-projects-testimonials' ),
      'attributes'            => __( 'Post Attributes', 'wp-projects-testimonials' ),
      'parent_item_colon'     => __( 'Parent Post', 'wp-projects-testimonials' ),
      'all_items'             => __( 'All Posts', 'wp-projects-testimonials' ),
      'add_new_item'          => __( 'Add New Post', 'wp-projects-testimonials' ),
      'add_new'               => __( 'Add New', 'wp-projects-testimonials' ),
      'new_item'              => __( 'New Post', 'wp-projects-testimonials' ),
      'edit_item'             => __( 'Edit Post', 'wp-projects-testimonials' ),
      'update_item'           => __( 'Update Post', 'wp-projects-testimonials' ),
      'view_item'             => __( 'View Post', 'wp-projects-testimonials' ),
      'view_items'            => __( 'View Posts', 'wp-projects-testimonials' ),
      'search_items'          => __( 'Search Post', 'wp-projects-testimonials' ),
      'not_found'             => __( 'Not Found', 'wp-projects-testimonials' ),
      'not_found_in_trash'    => __( 'No found in Trash', 'wp-projects-testimonials' ),
      'featured_image'        => __( 'Featured Image', 'wp-projects-testimonials' ),
      'set_featured_image'    => __( 'Set Featured Image', 'wp-projects-testimonials' ),
      'remove_featured_image' => __( 'Remove Featured Image', 'wp-projects-testimonials' ),
      'use_featured_image'    => __( 'Use as Featured Image', 'wp-projects-testimonials' ),
      'insert_into_item'      => __( 'Insert into Post', 'wp-projects-testimonials' ),
      'uploaded_to_this_item' => __( 'Uploaded to this Post', 'wp-projects-testimonials' ),
      'items_list'            => __( 'Posts List', 'wp-projects-testimonials' ),
      'items_list_navigation' => __( 'Posts List Navigation', 'wp-projects-testimonials' ),
      'filter_items_list'     => __( 'Filter Posts List', 'wp-projects-testimonials' ),
    );
  
    $args = array(
      'label'                 => __( 'Testimonials', 'wp-projects-testimonials' ),
      'description'           => __( 'Client Testimonials', 'wp-projects-testimonials' ),
      'labels'                => $labels,
      'supports'              => array( 'title' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 20,
      'menu_icon'             => 'dashicons-format-quote',
      'show_in_admin_bar'     => true,
      'show_in_rest'          => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => false,
      'capability_type'       => 'post',
      'rewrite'               => array('slug' => 'testimonials'),
      'taxonomies'            => array('Client'),
    );
    register_post_type( 'wppt_testimonials', $args );
  }
}