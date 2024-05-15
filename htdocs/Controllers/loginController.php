<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);
class LoginController{


    // will return a response
    public static function loginRequest(){
        var_dump($_GET);
        $username = $_GET["username"];
        $password = $_GET["password"];
        $model = new loginModel();
        $result = $model->verifyUser($username, $password);
        if($result === "Success"){
            header('Location: /');
        } else {
            echo $result;
        }
    }



}

