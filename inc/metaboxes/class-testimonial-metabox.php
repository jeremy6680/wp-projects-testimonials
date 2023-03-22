<?php
// Meta-Box Generator
      // How to use: $meta_value = get_post_meta( $post_id, $field_id, true );
      // Example: get_post_meta( get_the_ID(), "my_metabox_field", true );

      class TestimonialMetabox {

        private $screens = array('jm_testimonials');

        private $fields = array(
          array(
            'label' => 'Author',
            'id' => 'text_author',
            'type' => 'text',
           ),
          array(
            'label' => 'Job',
            'id' => 'text_job',
            'type' => 'text',
           ),
          array(
            'label' => 'Picture',
            'id' => 'media_picture',
            'type' => 'media',
            'returnvalue' => 'id',
          ),
          array(
            'label' => 'Text',
            'id' => 'textarea_text',
            'type' => 'textarea',
           )  
        );

        public function __construct() {
          add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
          add_action( 'save_post', array( $this, 'save_fields' ) );
          add_action( 'admin_footer', array( $this, 'add_media_fields' ) );
        }

        public function add_meta_boxes() {
          foreach ( $this->screens as $s ) {
            add_meta_box(
              'Testimonial',
              __( 'Testimonial', 'wp-projects-testimonials' ),
              array( $this, 'meta_box_callback' ),
              $s,
              'normal',
              'high'
            );
          }
        }

        public function meta_box_callback( $post ) {
          wp_nonce_field( 'Testimonial_data', 'Testimonial_nonce' ); 
          echo "Client Testimonial";
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
        
              case 'media':
                $meta_url = '';
                if ($meta_value) {
                  if ($field['returnvalue'] == 'url') {
                    $meta_url = $meta_value;
                  } else {
                    $meta_url = wp_get_attachment_url($meta_value);
                  }
                }
                $input = sprintf(
                  '<input style="display:none;" id="%s" name="%s" type="text" value="%s" data-return="%s"><div id="preview%s" style="background-color:#fafafa;margin-right:12px;border:1px solid #eee;width: 150px;height:150px;background-image:url(%s);background-size:cover;background-repeat:no-repeat;background-position:center;"></div><input style="width: 15%%;margin-right:5px;" class="button new-media" id="%s_button" name="%s_button" type="button" value="Select" /><input style="width: 15%%;" class="button remove-media" id="%s_buttonremove" name="%s_buttonremove" type="button" value="Delete" />',
                  $field['id'],
                  $field['id'],
                  $meta_value,
                  $field['returnvalue'],
                  $field['id'],
                  $meta_url,
                  $field['id'],
                  $field['id'],
                  $field['id'],
                  $field['id']
                );
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

        
      public function add_media_fields() {
        ?>
        <script>
          jQuery(document).ready(function($){
            if ( typeof wp.media !== 'undefined' ) {
              var _custom_media = true,
              _orig_send_attachment = wp.media.editor.send.attachment;
              $('.new-media').click(function(e) {
                var send_attachment_bkp = wp.media.editor.send.attachment;
                var button = $(this);
                var id = button.attr('id').replace('_button', '');
                _custom_media = true;
                wp.media.editor.send.attachment = function(props, attachment){
                  if ( _custom_media ) {
                    if ($('input#' + id).data('return') == 'url') {
                      $('input#' + id).val(attachment.url);
                    } else {
                      $('input#' + id).val(attachment.id);
                    }
                    $('div#preview'+id).css('background-image', 'url('+attachment.url+')');
                  } else {
                    return _orig_send_attachment.apply( this, [props, attachment] );
                  };
                }
                wp.media.editor.open(button);
                return false;
              });
              $('.add_media').on('click', function(){
                _custom_media = false;
              });
              $('.remove-media').on('click', function(){
                var parent = $(this).parent();
                parent.find('input[type="text"]').val('');
                parent.find('div').css('background-image', 'url()');
              });
            }
          });
        </script><?php
      }
    

        public function save_fields( $post_id ) {
          if ( !isset( $_POST['Testimonial_nonce'] ) ) {
            return $post_id;
          }
          $nonce = $_POST['Testimonial_nonce'];
          if ( !wp_verify_nonce( $nonce, 'Testimonial_data' ) ) {
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



      