<?php
namespace WPPS\Frontend;

class Frontend {

    /**
    * Construct Class
    * @since 1.0.0
    */
    public function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'scripts_styles' ] );
    }

    /**
    * Init Frontend Scripts & Styles
    * @since 1.0.0
    * @return void
    */
    public function scripts_styles() {
        wp_register_style( 'wpps-frontend', WPPS_PLUGIN_URL . 'frontend/dist/css/frontend.min.css', [], rand(), 'all' );
        wp_register_script( 'jquery-validator', WPPS_PLUGIN_URL . 'frontend/dist/js/jquery.validator.min.js', [ 'jquery' ], rand(), true );
        wp_register_script( 'wpps-frontend', WPPS_PLUGIN_URL . 'frontend/dist/js/frontend.min.js', [ 'jquery', 'jquery-validator' ], rand(), true );

        wp_enqueue_style( 'wpps-frontend' );
        wp_enqueue_script( 'jquery-validator' );
        wp_enqueue_script( 'wpps-frontend' );

        // Localizing the script
        $options = [
            'homeUrl'  => home_url( '/' ),
            'adminUrl' => admin_url( '/' ),
            'ajaxUrl'  => admin_url( '/admin-ajax.php' ),
            'nonce'    => wp_create_nonce( 'b?le*;K7.T2jk_*(+3&[G[xAc8O~Fv)2T/Zk9N:GKBkn$piN0.N%N~X91VbCn@.4' ),
        ];
        wp_localize_script( 'wpps-frontend', 'frontendLocalizer', $options );
    }

}