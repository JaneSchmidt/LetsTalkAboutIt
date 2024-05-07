<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "Controllers/loginController.php";
include "Controllers/registerController.php";


$request = $_SERVER["REQUEST_URI"];
$requestArr = parse_url($request);


/*
to do: 

namespaces


*/

switch($requestArr["path"]){
  case "/":
    require("Views/homeView.php");
    break; 
  case "/login":
    require("Views/loginView.php");
    break; 
  case "/register":
    require("Views/registerView.php");
    break;
  case "/getLoggedIn":
    LoginController::loginRequest();
  case "/getRegistered":
    RegisterController::registerRequest();
  // case "/connection":
  //   require("Database/connection.php");
  default:
    require("Views/homeView.php");
    break; 

}

