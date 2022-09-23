<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Polylang - Lang register
if (function_exists('pll_register_string')) {
  pll_register_string( 'ella/works', 'Back to works' );
}


// Remove WordPress generator meta tag and version number from source code
remove_action('wp_head', 'wp_generator');


//Prevent access to admin panel from subscribers
function remove_read_func() {  
  $role = get_role( 'subscriber' );
  $role->remove_cap( 'read' );    
}
//add_action( 'admin_init', 'remove_read_func' );


//Hide admin bar form subscribers
function remove_admin_bar() {
  if (current_user_can('subscriber')) {
    show_admin_bar(false);
  }
}
add_action( 'after_setup_theme', 'remove_admin_bar' );


//Redirect subscribers to home page when trying to access admin panel
function redirect_to_home() {
  if ( is_admin() && current_user_can('subscriber') ) {
    wp_redirect( home_url() );
    exit();
  }   
}
//add_filter( 'init', 'redirect_to_home' );


// Hide WordPress REST API users from non-registered users
/*
add_filter( 'rest_authentication_errors', function( $result ) {
  if ( ! empty( $result ) ) {
    return $result;
  }
  if ( ! is_user_logged_in() ) {
    return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
  }
  return $result;
});
*/

// Disable WordPress REST API users endpoint
add_filter( 'rest_endpoints', function( $endpoints ) {
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});
