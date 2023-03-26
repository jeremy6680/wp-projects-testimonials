<?php
  /**
   * The below function will help to load template file from plugin directory of WordPress
   * Extracted from : http://wordpress.stackexchange.com/questions/94343/get-template-part-from-plugin
   * Code from https://gist.github.com/ashokmhrj/b5f6e28f15dc84601954 with a slight adjustment (passing of $args) 
   */ 
  

   function wppt_get_template_part($slug, $name = null, $args = array()) {

    do_action("wppt_get_template_part_{$slug}", $slug, $name);

    $templates = array();
    if (isset($name))
        $templates[] = "{$slug}-{$name}.php";

    $templates[] = "{$slug}.php";

    $template_path = wppt_get_template_path($templates, false, false);

    if ($template_path) {
        if (!empty($args)) {
            extract($args);
        }
        include $template_path;
    }
}

  /* 
  * Extend locate_template from WP Core 
  */ 

  function wppt_get_template_path($template_names, $load = false, $require_once = true ) {
      $located = ''; 
      foreach ( (array) $template_names as $template_name ) { 
        if ( !$template_name ) 
          continue; 

        /* search file within the PLUGIN_DIR_PATH only */ 
        if ( file_exists(WPPT_PLUGIN_PATH . $template_name)) { 
          $located = WPPT_PLUGIN_PATH . $template_name; 
          break; 
        } 
      }

      if ( $load && '' != $located )
          load_template( $located, $require_once );

      return $located;
  }