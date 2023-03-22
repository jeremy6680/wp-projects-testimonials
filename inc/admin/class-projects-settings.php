<?php
// Settings Page: Projects_Settings
// Retrieving values: get_option( 'your_field_id' )
class Projects_Settings {

	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
	}

	public function wph_create_settings() {
		$page_title = 'Projects Settings';
		$menu_title = 'Projects Settings';
		$capability = 'manage_options';
		$slug = 'ProjectsSettings';
		$callback = array($this, 'wph_settings_content');
                add_options_page($page_title, $menu_title, $capability, $slug, $callback);
		
	}
    
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Projects Settings</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'ProjectsSettings' );
					do_settings_sections( 'ProjectsSettings' );
					submit_button();
				?>
			</form>
		</div> <?php
	}

	public function wph_setup_sections() {
		add_settings_section( 'ProjectsSettings_section', 'Settings for Projects', array(), 'ProjectsSettings' );
	}

	public function wph_setup_fields() {
		$fields = array(
                    array(
                        'section' => 'ProjectsSettings_section',
                        'label' => 'Projects slug',
                        'placeholder' => 'projects',
                        'id' => 'Projects slug_text',
                        'desc' => 'Choose a slug for your projects',
                        'type' => 'text',
                    )
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'ProjectsSettings', $field['section'], $field );
			register_setting( 'ProjectsSettings', $field['id'] );
		}
	}
	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		$placeholder = '';
		if ( isset($field['placeholder']) ) {
			$placeholder = $field['placeholder'];
		}
		switch ( $field['type'] ) {
            
            
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