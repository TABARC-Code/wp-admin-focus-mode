<?php
/**
 * Uninstall routine for WP Admin Focus Mode.
 *
 * Removes the stored settings when the plugin is deleted.
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

delete_option( 'wp_admin_focus_mode_settings' );
