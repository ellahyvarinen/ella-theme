<?php
/**
 * Plugin Name: Customizations
 * Plugin URI: https://timanttti.com
 * Description: Customizing WordPress with custom plugin
 * Version: 1.0.0
 * Author: Ella Hyvärinen
 * Author URI: https://timanttti.com
 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Changes admin's footer text.
 */
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    html, body {
      font-family: "Roboto Mono";
      font-size: 12px;
    } 
  </style>';
}

// Add more functions below.