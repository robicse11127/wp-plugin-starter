<?php
/**
 * @link            http://wp-plugin-starter.com
 * @since           1.0.0
 * @package         WP_Plugin_Starter
 * 
 * Plugin Name:     WP Plugin Starter
 * Plugin URI:      http://wp-plugin-starter.com
 * Description:     A plugin starter boilerplate.
 * Version:         1.0.0 
 * Author:          MD Rabiul Islam Robi
 * Author URI:      http://robicse11127.github.io/
 * License:         GPLv3 or later
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     wp-plugin-starter
 */
if( !defined( 'ABSPATH' ) ) exit(); // No Direct Access

/**
 * Require Autoloader
 */
require_once 'vendor/autoload.php';

use WPPS\Admin\Admin;
use WPPS\Frontend\Frontend;
use WPPS\Includes\Books\Books;

final class WP_Plugin_Starter {

    /**
     * Define Plugin Version
     */
    const version = '1.0.0';

    /**
     * Construct Fucntion
     */
    private function __construct() {
        $this->plugin_constants();
        register_activation_hook( __FILE__, [ $this, 'activate' ] );
        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
    }

    /**
     * Plugins Constants
     * @since 1.0.0
     * @return void
     */
    public function plugin_constants() {
        define( 'WPPS_VERISON', self::version );
        define( 'WPPS_PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
        define( 'WPPS_PLUGIN_URL', trailingslashit( plugins_url( '/', __FILE__ ) ) );
        define( 'WPPS_NONCE', 'b?le*;K7.T2jk_*(+3&[G[xAc8O~Fv)2T/Zk9N:GKBkn$piN0.N%N~X91VbCn@.4' );
    }

    /**
     * Singletone Instance of the Class
     * @since 1.0.0
     * @return void
     */
    public static function init() {
        static $instance = false;

        if( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * On Plugin Activation
     * @since 1.0.0
     * @return void
     */
    public function activate() {
        // On Plugin Activation
    }

    /**
     * Init Plugin
     * @since 1.0.0
     * @return void
     */
    public function init_plugin() {
        // Load Class
        new Admin();
        new Frontend();
        new Books();
    }

}

/**
 * Initialize Main Plugin
 * @since 1.0.0
 * @return \WP_Plugin_Starter
 */
function wp_plugin_starter() {
    return WP_Plugin_Starter::init();
}

// Run the plugin
wp_plugin_starter();