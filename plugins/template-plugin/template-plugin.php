<?php
/**
 * Plugin Name: Template Plugin
 * Plugin URI: https://example.com
 * Description: A template plugin for WordPress plugin development
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: template-plugin
 * Domain Path: /languages
 *
 * @package TemplatePlugin
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin constants.
 */
define( 'TEMPLATE_PLUGIN_VERSION', '1.0.0' );
define( 'TEMPLATE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'TEMPLATE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load plugin text domain.
 */
function template_plugin_load_textdomain() {
	load_plugin_textdomain(
		'template-plugin',
		false,
		dirname( plugin_basename( __FILE__ ) ) . '/languages'
	);
}
add_action( 'plugins_loaded', 'template_plugin_load_textdomain' );

/**
 * Activation hook.
 */
function template_plugin_activate() {
	// Add activation logic here.
	do_action( 'template_plugin_activated' );
}
register_activation_hook( __FILE__, 'template_plugin_activate' );

/**
 * Deactivation hook.
 */
function template_plugin_deactivate() {
	// Add deactivation logic here.
	do_action( 'template_plugin_deactivated' );
}
register_deactivation_hook( __FILE__, 'template_plugin_deactivate' );

/**
 * Uninstall hook.
 */
function template_plugin_uninstall() {
	// Add uninstall logic here.
	do_action( 'template_plugin_uninstalled' );
}
register_uninstall_hook( __FILE__, 'template_plugin_uninstall' );

/**
 * Initialize the plugin.
 */
function template_plugin_init() {
	// Add your plugin initialization code here.
	do_action( 'template_plugin_init' );
}
add_action( 'plugins_loaded', 'template_plugin_init' );

/**
 * Add admin menu.
 */
function template_plugin_add_admin_menu() {
	add_menu_page(
		__( 'Template Plugin', 'template-plugin' ),
		__( 'Template', 'template-plugin' ),
		'manage_options',
		'template-plugin',
		'template_plugin_admin_page',
		'dashicons-admin-generic',
		99
	);
}
add_action( 'admin_menu', 'template_plugin_add_admin_menu' );

/**
 * Render admin page.
 */
function template_plugin_admin_page() {
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Template Plugin', 'template-plugin' ); ?></h1>
		<p><?php esc_html_e( 'Welcome to your template plugin! Start developing here.', 'template-plugin' ); ?></p>
	</div>
	<?php
}
