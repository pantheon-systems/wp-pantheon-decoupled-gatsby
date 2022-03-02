<?php
/**
 * Plugin Name:     Pantheon Decoupled Gatsby
 * Plugin URI:      https://pantheon.io/
 * Description:     Configuration necessary for using WordPress with Gatsby on Pantheon.
 * Version:         0.1.0
 * Author:          Pantheon
 * Author URI:      https://pantheon.io/
 * Text Domain:     pantheon-decoupled-gatsby
 * Domain Path:     /languages
 *
 * @package         Pantheon_Decoupled
 */

require_once(ABSPATH . 'wp-admin/includes/plugin.php');

function pantheon_decoupled_gatsby_activate() {
  if (get_option('pantheon_decoupled_gatsby_activated') !== 1) {
    activate_plugin('pantheon-decoupled/pantheon-decoupled.php');
    activate_plugin('wp-gatsby/wp-gatsby.php');

    update_option('pantheon_decoupled_gatsby_activated', 1);
  } else {
    return;
  }
}

add_action('init', 'pantheon_decoupled_gatsby_activate');
