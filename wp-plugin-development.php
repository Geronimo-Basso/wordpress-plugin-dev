<?php
/**
 * Plugin Name: wp-plugin-development
 * Plugin URI: https://github.com/Geronimo-Basso
 * Description: Big brain time
 * Version: 1.0
 * Author: Geronimo Basso
 * Author URI: https://github.com/Geronimo-Basso
 * Requires PHP: 5.4
 * Requires at least: 4.7
 * Tested up to: 6.0
 * Text Domain:
 * Domain Path: /languages/
 *
 * WC requires at least: 3.5
 * WC tested up to: 6.8
 * Woo: 260061:ecaa2080668997daf396b8f8a50d891a
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

add_action( 'admin_menu', 'pdev_create_menu' );
add_action( 'admin_menu', 'pdev_create_submenu' );
add_action( 'admin_menu' , 'pdev_setting_plugin_color');

function pdev_create_menu() {

    //create custom top-level menu
    add_menu_page( 'PDEV Settings Page', 'PDEV Settings',
        'manage_options', 'pdev-options', 'pdev_settings_page',
        'dashicons-smiley', 99 );

    //create submenu items
    add_submenu_page( 'pdev-options', 'About The PDEV Plugin', 'About', 'manage_options',
        'pdev-about', 'pdev_about_page' );
    add_submenu_page( 'pdev-options', 'Help With The PDEV Plugin', 'Help', 'manage_options',
        'pdev-help', 'pdev_help_page' );
    add_submenu_page( 'pdev-options', 'Uninstall The PDEV Plugin', 'Uninstall', 'manage_options',
        'pdev-uninstall', 'pdev_uninstall_page' );
}

function pdev_create_submenu() {

    //create a submenu under Settings
    add_options_page( 'PDEV Plugin Settings', 'PDEV Settings', 'manage_options',
        'pdev_plugin', 'pdev_plugin_option_page' );
}

function pdev_setting_plugin_color(){
    add_option('pdev_plugin_color' , 'red' );
}

//placerholder function for the options page
function pdev_plugin_option_page() {

}

//placerholder function for the settings page
function pdev_settings_page() {

}

//placerholder function for the about page
function pdev_about_page() {

}

//placerholder function for the help page
function pdev_help_page() {

}

//placerholder function for the uninstall page
function pdev_uninstall_page() {

}