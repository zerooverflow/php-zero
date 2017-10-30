<?php


include 'class-core.php';

function core(){
    return Core::get_instance();
}


$_GLOBAL['Core'] = core();