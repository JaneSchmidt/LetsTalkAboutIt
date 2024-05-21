<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

include "Controllers/loginController.php";
include "Controllers/registerController.php";
include "Controllers/logoutController.php";

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
  case "/resetPassword":
    require("Views/resetPassword.php");
    break;
  case "/addArticle":
    require("Views/addArticle.php");
    break;
  case "/logout":
    LogoutController::logoutRequest();
    break;
  case "/getLoggedIn":
    LoginController::loginRequest();
    break;
  case "/getRegistered":
    RegisterController::registerRequest();
    break;
  default:
    require("Views/homeView.php");
    break; 

}

