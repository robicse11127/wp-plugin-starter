<?php
namespace WPPS\Admin;

class Admin {

    /**
    * Construct Class
    * @since 1.0.0
    */
    public function __construct() {
        add_action( 'admin_enqueue_scripts', [ $this, 'scripts_styles' ] );
    }

    /**
    * Init Admin Scripts & Styles
    * @since 1.0.0
    * @return void
    */
    public function scripts_styles() {
        wp_register_style( 'wpps-admin', WPPS_PLUGIN_URL . 'admin/dist/css/admin.min.css', [], rand(), 'all' );
        wp_register_script( 'wpps-admin', WPPS_PLUGIN_URL . 'admin/dist/js/admin.min.js', [ 'jquery' ], rand(), true );

        wp_enqueue_style( 'wpps-admin' );
        wp_enqueue_script( 'wpps-admin' );
    }

}