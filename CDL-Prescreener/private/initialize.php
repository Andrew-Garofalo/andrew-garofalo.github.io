<?php
//make sure there is an output buffer no matter what server we are on
ob_start();

session_start();

// Assign file paths to PHP constants
// __FILE__ returns the current path to this initialize file
// dirname() returns the path to the parent directory
//PRIVATE_PATH gets path up to private directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
//PRIVATE_PATH gets path up to public directory
define("PUBLIC_PATH", PROJECT_PATH . '\public');
//SHARED_PATH gets path up to shared directory
define("SHARED_PATH", PRIVATE_PATH . '\shared');

// * Can dynamically find everything in URL up to "/public"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// define("WWW_ROOT", '/~AndrewG/CDL_Prescreener/public');
define("WWW_ROOT", $doc_root);

require_once 'database.php';
require_once "functions.php";
require_once "validation_functions.php";

$db = db_connect();