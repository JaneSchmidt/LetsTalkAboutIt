<?php
session_start();

ini_set("display_errors", 1);
error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/';

require __DIR__ . "/Core/functions.php";
require base_path("Core/router.php");

$request = $_SERVER["REQUEST_URI"];
$requestArr = parse_url($request);
$method = isset($_POST['_method']) ?? $_SERVER['REQUEST_METHOD'];


spl_autoload_register(function($class){
  include base_path("Core/" . $class . ".php");
});  

Router::route($requestArr);


