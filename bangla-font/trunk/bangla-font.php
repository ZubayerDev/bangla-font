<?php
/**
 * Plugin Name:       Bangla Font
 * Plugin URI:        https://wordpress.org/plugins/bangla-font/
 * Description:       As soon as this plugin is installed, the Bengali text of your website will be as clear as the text of a book. The texts of the website will be similar to Bengali books. As a result, the content of the website will be neat and clean.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Tested up to:      6.4.2
 * Author:            ThemeForen
 * Author URI:        https://web.facebook.com/themeforen
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt 
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Initializes the plugin by setting localization, hooks.
 */
function bangla_fonts_forBengali() {
    // Enqueue the CSS stylesheet
    wp_enqueue_style('bangla-fonts-style', esc_url(plugins_url('assets/css/style.css', __FILE__)));
}

// Hook the function to wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'bangla_fonts_forBengali');
