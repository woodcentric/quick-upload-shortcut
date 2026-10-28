<?php
/**
 * Plugin Name: Upload Plugin Shortcut
 * Description: Adds Plugins > Upload Plugin, opening the built-in ZIP upload form directly.
 * Version: 1.0.0
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * * License: GPL-3.0-or-later
 * Text Domain: upload-plugin-shortcut
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
        __( 'Upload Plugin', 'upload-plugin-shortcut' ),
        __( 'Upload Plugin', 'upload-plugin-shortcut' ),
        'upload_plugins',
        'plugin-install.php?tab=upload'
    );
}
add_action( 'admin_menu', 'ups_shortcut_register_menu' );
add_action( 'network_admin_menu', 'ups_shortcut_register_menu' );
