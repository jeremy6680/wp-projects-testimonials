<?php
// Meta-Box Generator
      // How to use: $meta_value = get_post_meta( $post_id, $field_id, true );
      // Example: get_post_meta( get_the_ID(), "my_metabox_field", true );

      class ProjectMetabox {

        private $screens = array('wppt_projects');

        private $fields = array(
          array(
            'label' => 'Completion Date',
            'id' => 'wppt_completion_date',
            'type' => 'date',
           ),
          array(
            'label' => 'Project Overview Title',
            'id' => 'wppt_overview_title',
            'type' => 'text',
           ),
          array(
            'label' => 'Project Overview Text',
            'id' => 'wppt_overview_text',
            'type' => 'wysiwyg',
           ),
          array(
            'label' => 'The Challenge',
            'id' => 'wppt_challenge_text',
            'type' => 'textarea',
           ),
          array(
            'label' => 'The Approach',
            'id' => 'wppt_approach_text',
            'type' => 'textarea',
           ),
          array(
            'label' => 'The Solution',
            'id' => 'wppt_solution_text',
            'type' => 'textarea',
           ),
          array(
            'label' => 'The Results',
            'id' => 'wppt_results_text',
            'type' => 'textarea',
           )  
        );

        public function __construct() {
          add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
          add_action( 'save_post', array( $this, 'save_fields' ) );
        }

        public function add_meta_boxes() {
          foreach ( $this->screens as $s ) {
            add_meta_box(
              'Project',
              __( 'Project', 'wppt-plugin' ),
              array( $this, 'meta_box_callback' ),
              $s,
              'normal',
              'high'
            );
          }
        }

        public function meta_box_callback( $post ) {
          wp_nonce_field( 'Project_data', 'Project_nonce' ); 
          echo "Informations about this Project";
          $this->field_generator( $post );
        }

        public function field_generator( $post ) {
          $output = '';
          foreach ( $this->fields as $field ) {
            $label = '<label for="' . $field['id'] . '">' . $field['label'] . '</label>';
            $meta_value = get_post_meta( $post->ID, $field['id'], true );
            if ( empty( $meta_value ) ) {
              if ( isset( $field['default'] ) ) {
                $meta_value = $field['default'];
              }
            }
            switch ( $field['type'] ) {
              case 'textarea':
                $input = sprintf(
                  '<textarea style="width: 100%%" id="%s" name="%s" rows="5">%s</textarea>',
                  $field['id'],
                  $field['id'],
                  $meta_value
                );
                break;
        
              case 'wysiwyg':
                ob_start();
                wp_editor($meta_value, $field['id']);
                $input = ob_get_contents();
                ob_end_clean();
                break;
        
              default:
                $input = sprintf(
                '<input %s id="%s" name="%s" type="%s" value="%s">',
                $field['type'] !== 'color' ? 'style="width: 100%"' : '',
                $field['id'],
                $field['id'],
                $field['type'],
                $meta_value
              );
            }
            $output .= $this->format_rows( $label, $input );
          }
          echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
        }

        public function format_rows( $label, $input ) {
          return '<div style="margin-top: 10px;"><strong>'.$label.'</strong></div><div>'.$input.'</div>';
        }

        

        public function save_fields( $post_id ) {
          if ( !isset( $_POST['Project_nonce'] ) ) {
            return $post_id;
          }
          $nonce = $_POST['Project_nonce'];
          if ( !wp_verify_nonce( $nonce, 'Project_data' ) ) {
            return $post_id;
          }
          if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
          }
          foreach ( $this->fields as $field ) {
            if ( isset( $_POST[ $field['id'] ] ) ) {
              switch ( $field['type'] ) {
                case 'email':
                  $_POST[ $field['id'] ] = sanitize_email( $_POST[ $field['id'] ] );
                  break;
                case 'text':
                  $_POST[ $field['id'] ] = sanitize_text_field( $_POST[ $field['id'] ] );
                  break;
              }
              update_post_meta( $post_id, $field['id'], $_POST[ $field['id'] ] );
            } else if ( $field['type'] === 'checkbox' ) {
              update_post_meta( $post_id, $field['id'], '0' );
            }
          }
        }


      }
      