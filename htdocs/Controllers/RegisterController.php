<?php



use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
include "registerModel.php";

class RegisterController{


    // will return a response 
    public static function registerRequest(){
        var_dump($_POST);
        $data = $_POST;
        $model = new RegisterModel;
        $user = $model->createUser($data);
        
    }
}