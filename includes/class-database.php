<?php

class Database{
    private static $instance = null;

    private $host = "localhost";
	private $username = "backoffice";
	private $password = "backoffice";
    private $database = "backoffice";
    public $_connection;

	public static function get_instance() {
 
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
 
        return self::$instance;
 
    }

    public function __construct() {
        $this->_connection = new mysqli($this->host, $this->username, 
        $this->password, $this->database);

        if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
    }
    
    private function __clone() {}
    private function __wakeup(){}
}

