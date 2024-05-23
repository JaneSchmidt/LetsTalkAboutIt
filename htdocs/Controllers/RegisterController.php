<?php

include __DIR__ . "/../Authorizations/validator.php";
include __DIR__ . "/../Models/registerModel.php";
include __DIR__ . "/../Database/connection.php";

class RegisterController
{

    public static function registerRequest()
    {
        $errors = [];

        if(Validator::string($_POST["first-name"], 12) 
            || Validator::string($_POST["username"], 12) 
            || Validator::string($_POST["password"], 18)){

            $errors["form-fill-out"] = "Please fill out all required sections";
            
        } 

        if($_POST["password"] !== $_POST["confirm-password"]){

            $errors["confirm-password"] = "Password and confirm password are not the same";

        }

        $model = new RegisterModel;

        if($model->checkUserExists($_POST["username"])){

            $errors["username"] = "User already exists";
            
        }

        if(empty($errors)){

            $_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);

            $data = $_POST;

            $user = $model->createUser($data);

            if($user){

                header('Location: /login');

            } else {

                echo("error occured");

            }
        } 
    }
}

require __DIR__ . '/../Views/registerView.php';