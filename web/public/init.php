<?php
//Start Session
session_start([
    'cookie_secure' => true, 'cookie_lifetime' => 86400, 'cookie_samesite' => 'Strict', 'cookie_httponly' => true
]);

//Include Configuration
require_once('config/config.php');

//Helper Function Files
require_once('helpers/system_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/db_helper.php');

//Autoload Classes
function __autoload($class_name){
    require_once('libraries/'.$class_name.'.php');
}
