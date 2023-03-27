<?php
// Settings Page: WPPTSettings
// Retrieving values: get_option( 'your_field_id' )
class WPPT_Settings {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
	}

	public function wph_create_settings() {
		$page_title = 'WPPT Settings';
		$menu_title = 'WPPT Settings';
		$capability = 'manage_options';
		$slug = 'WPPTSettings';
		$callback = array($this, 'wph_settings_content');
                add_options_page($page_title, $menu_title, $capability, $slug, $callback);
		
	}
    
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>WPPT Settings</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'WPPTSettings' );
					do_settings_sections( 'WPPTSettings' );
					submit_button();
				?>
			</form>
		</div> <?php
	}

	public function wph_setup_sections() {
		add_settings_section( 'WPPTSettings_section', 'Settings for Projects & Testimonials', array(), 'WPPTSettings' );
	}

	public function wph_setup_fields() {
		$fields = array(
                    array(
                        'section' => 'WPPTSettings_section',
                        'label' => 'Display Testimonials?',
                        'id' => 'wppt-display-testimonials',
                        'desc' => 'Display Testimonials on Projects Single?',
                        'type' => 'checkbox',
                    )
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'WPPTSettings', $field['section'], $field );
			register_setting( 'WPPTSettings', $field['id'] );
		}
	}
	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		$placeholder = '';
		if ( isset($field['placeholder']) ) {
			$placeholder = $field['placeholder'];
		}
		switch ( $field['type'] ) {
            
            
                        case 'checkbox':
                            printf('<input %s id="%s" name="%s" type="checkbox" value="1">',
                                $value === '1' ? 'checked' : '',
                                $field['id'],
                                $field['id']
                        );
                            break;

			default:
				printf( '<input name="%1$s" id="%1$s" type="%2$s" placeholder="%3$s" value="%4$s" />',
					$field['id'],
					$field['type'],
					$placeholder,
					$value
				);
		}
		if( isset($field['desc']) ) {
			if( $desc = $field['desc'] ) {
				printf( '<p class="description">%s </p>', $desc );
			}
		}
	}
    
}