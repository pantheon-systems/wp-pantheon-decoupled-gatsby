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

function pantheon_decoupled_gatsby_activate() {
	set_transient('pantheon_decoupled_gatsby_activated', false);
	if (!get_transient('pantheon_decoupled_gatsby_activated')) {
		activate_plugin('pantheon-decoupled/pantheon-decoupled.php');
		activate_plugin('wp-gatsby/wp-gatsby.php');

		set_transient('pantheon_decoupled_gatsby_activated', true);
	} else {
		return;
	}
}

register_activation_hook( __FILE__, 'pantheon_decoupled_gatsby_activate' );
