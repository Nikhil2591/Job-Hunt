<?php

// Start Session
session_start();

// Config File
require_once 'config.php';

// Include Helper File
require_once 'helpers/system_helpers.php';

function __autoload($class_name){
    require_once 'lib/'.$class_name. '.php';
}

