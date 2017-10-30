<?php

class Core{

    public $router;

    private static $instance = null;


	public static function get_instance() {
 
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
 
        return self::$instance;
 
    }

    public function __construct() {
        $this->includes();

        $this->router = new Router();
    }

    private function includes(){
        include 'class-database.php';
        include 'class-router.php';
    }

    private function __clone() {}
    private function __wakeup(){}
}
