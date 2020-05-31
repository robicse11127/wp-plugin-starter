<?php
namespace WPPS\Includes\Books;

use WPPS\Includes\Books\PostType;
use WPPS\Includes\Books\Template;

class Books {
    /**
    * Construct Function
    * @since 1.0.0
    */
    public function __construct() {
        $this->init_modules();
    }

    /**
    * Init Modules
    * @since 1.0.0
    * @return void
    */
    public function init_modules() {
        new PostType();
        new Template();
    }
}