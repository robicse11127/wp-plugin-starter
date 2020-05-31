<?php 
namespace WPPS\Includes\Books;

class Template {
    /**
     * Construct Function
     *
     * @since 1.0.0
     */
    public function __construct() {
        /**
         * Load Necessary Hooks
         */
        add_filter( 'single_template', array($this, 'create_single_page_template') );
    }

    /**
     * Create Single Page Template
     * 
     * @since 1.0.0
     */
    public function create_single_page_template( $template ) {
        global $post;
        if( 'book' === $post->post_type ) {
            $files = array( 'single-book.php' );
            $exists_in_theme = locate_template( $files, true );
            if( $exists_in_theme != '' ) {
                return $exists_in_theme;
            }else {
                return WPPS_PLUGIN_PATH . 'templates/book/single-book.php';
            }
        }
        return $template;
    }
}