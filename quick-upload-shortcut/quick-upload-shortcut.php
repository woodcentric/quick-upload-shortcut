
<?php
/**
 * Plugin Name: Quick Upload Shortcut
 * Description: Adds a convenient Upload Plugin shortcut to the WordPress admin menu, opening the built-in ZIP upload form directly.
 * Version: 1.0.1
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * Author: Plugin Place
 * License: GPL-3.0-or-later
 * Text Domain: quick-upload-shortcut
 */

defined( 'ABSPATH' ) || exit;

/** Register a direct link to the native installer, without a custom upload handler. */
function ups_shortcut_register_menu() {
    if ( ! current_user_can( 'install_plugins' ) || ! current_user_can( 'upload_plugins' ) ) {
        return;
    }

    // Multisite installations are managed from Network Admin.
    if ( is_multisite() && ! is_network_admin() ) {
        return;
    }

    add_submenu_page(
        'plugins.php',
        __( 'Upload Plugin', 'quick-upload-shortcut' ),
        __( 'Upload Plugin', 'quick-upload-shortcut' ),
        'upload_plugins',
        'plugin-install.php?tab=upload'
    );
}
add_action( 'admin_menu', 'ups_shortcut_register_menu' );
add_action( 'network_admin_menu', 'ups_shortcut_register_menu' );
