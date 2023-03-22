<?php
class Client_Taxonomy {
    public function __construct() {
        add_action( 'init', array( $this, 'register_taxonomy' ) );
        add_action( 'client_add_form_fields', array( $this, 'add_custom_fields' ), 10, 2 );
        add_action( 'client_edit_form_fields', array( $this, 'add_custom_fields' ), 10, 2 );
        add_action( 'created_client', array( $this, 'save_custom_fields' ), 10, 2 );
        add_action( 'edited_client', array( $this, 'save_custom_fields' ), 10, 2 );
    }
    
    public function register_taxonomy() {
        $labels = array(
            'name'              => _x( 'Clients', 'taxonomy general name', 'wp-projects-testimonials' ),
            'singular_name'     => _x( 'Client', 'taxonomy singular name', 'wp-projects-testimonials' ),
            'search_items'      => __( 'Search Clients', 'wp-projects-testimonials' ),
            'all_items'         => __( 'All Clients', 'wp-projects-testimonials' ),
            'parent_item'       => __( 'Parent Client', 'wp-projects-testimonials' ),
            'parent_item_colon' => __( 'Parent Client:', 'wp-projects-testimonials' ),
            'edit_item'         => __( 'Edit Client', 'wp-projects-testimonials' ),
            'update_item'       => __( 'Update Client', 'wp-projects-testimonials' ),
            'add_new_item'      => __( 'Add New Client', 'wp-projects-testimonials' ),
            'new_item_name'     => __( 'New Client Name', 'wp-projects-testimonials' ),
            'menu_name'         => __( 'Client', 'wp-projects-testimonials' ),
          );
          
          $args = array(
            'labels' => $labels,
            'description' => __( 'Client', 'wp-projects-testimonials' ),
            'hierarchical' => true,
            'public' => true,
            'publicly_queryable' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => false,
            'show_in_quick_edit' => true,
            'show_admin_column' => true,
            'show_in_rest' => false,
            'rewrite' => true,
          );
  
          register_taxonomy( 'client', array('wppt_projects', 'wppt_testimonials'), $args );
    }

    public function add_custom_fields($term) {
        if (is_object($term)) {
            $industry = get_term_meta( $term->term_id, 'industry', true );
            $size = get_term_meta( $term->term_id, 'size', true );
            $website = get_term_meta( $term->term_id, 'website', true );
        } else {
            $industry = '';
            $size = '';
            $website = '';
        }
        ?>
        <tr class="form-field">
            <th scope="row" valign="top">
                <label for="industry"><?php _e( 'Industry', 'client' ); ?></label>
            </th>
            <td>
                <input type="text" name="industry" id="industry" value="<?php echo esc_attr( $industry ); ?>">
            </td>
        </tr>
        <tr class="form-field">
            <th scope="row" valign="top">
                <label for="size"><?php _e( 'Size', 'client' ); ?></label>
            </th>
            <td>
                <input type="text" name="size" id="size" value="<?php echo esc_attr( $size ); ?>">
            </td>
        </tr>
        <tr class="form-field">
            <th scope="row" valign="top">
                <label for="website"><?php _e( 'Website', 'client' ); ?></label>
            </th>
            <td>
                <input type="url" name="website" id="website" value="<?php echo esc_attr( $website ); ?>">
            </td>
        </tr>
        <?php
    }

    public function save_custom_fields( $term_id, $taxonomy ) {
        if ( isset( $_POST['industry'] ) ) {
            $industry = sanitize_text_field( $_POST['industry'] );
            update_term_meta( $term_id, 'industry', $industry );
        }
        if ( isset( $_POST['size'] ) ) {
            $size = absint( $_POST['size'] );
            update_term_meta( $term_id, 'size', $size );
        }
        if ( isset( $_POST['website'] ) ) {
            $website = esc_url( $_POST['website'] );
            update_term_meta( $term_id, 'website', $website );
        }
    }
}