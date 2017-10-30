<?php

class Router{

   public function __construct() {

    	$urlparts = explode( "/", $_SERVER['REQUEST_URI'] );
    	var_dump ($urlparts);
    }

}

new Router();