<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);


$request = $_SERVER["REQUEST_URI"];
$requestArr = parse_url($request);


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
  default:
    require("Views/homeView.php");
    break; 

}

