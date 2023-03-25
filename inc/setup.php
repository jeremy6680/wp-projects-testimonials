<?php

register_activation_hook( __FILE__, 'wppt_activate' );
function wppt_activate() {
    // Code to run on activation
}

register_deactivation_hook( __FILE__, 'wppt_deactivate' );
function wppt_deactivate() {
    // Code to run on deactivation
}