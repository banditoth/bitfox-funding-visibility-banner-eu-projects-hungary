<?php
/*
 * Plugin Name: bitfox.hu EU Funding Banner - Hungary
 * Plugin URI: https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary
 * Description: Manage EU-funded project visibility information and a configurable corner banner for websites in Hungary by bitfox.hu.
 * Version: 1.0.7
 * Author: bitfox.creative.studio
 * License: GPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

defined( 'ABSPATH' ) || exit;

define( 'EUSV_VERSION', '1.0.7' );
define( 'EUSV_FILE', __FILE__ );
define( 'EUSV_DIR', plugin_dir_path( __FILE__ ) );
define( 'EUSV_URL', plugin_dir_url( __FILE__ ) );

require_once EUSV_DIR . 'includes/class-eusv-plugin.php';

add_action( 'plugins_loaded', array( 'EUSV_Plugin', 'instance' ) );
