<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$request = $_SERVER["REQUEST_URI"];
$requestArr = parse_url($request);

switch($requestArr["path"]){
  case "/":
    require("Controllers/homeController.php");
    break; 
  case "/login":
    require("Controllers/loginController.php");
    break; 
  case "/register":
    require("Controllers/registerController.php");
    break;
  case "/resetPassword":
    require("Views/resetPassword.php");
    break;
  case "/addArticle":
    require("Views/addArticle.php");
  //   break;
  // case "/logout":
  //   LogoutController::logoutRequest();
  //   break;
  case "/getLoggedIn":
    LoginController::loginRequest();
    break;
  case "/getRegistered":
    RegisterController::registerRequest();
    break;
  default:
    require("Controllers/homeController.php");
    break; 

}

