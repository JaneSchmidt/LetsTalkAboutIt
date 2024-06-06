<?php

include base_path("Models/registerModel.php");

class RegisterController
{

    public function validations(){
        $errors = [];

        if($userErr = Validator::string($_POST["username"], 18, 4)){

            $errors["username"] = $userErr;
        }

        if($userErr = Validator::string($_POST["first-name"], 18, 4)){

            $errors["name"] = $userErr;
        }

        if($userErr = Validator::string($_POST["password"], 12)){

            $errors["password"] = $userErr;
            
        } 

        if($_POST["password"] !== $_POST["confirm-password"]){

            $errors["confirmPassword"] = "Password and confirm password are not the same";

        }

        $model = new RegisterModel;

        if($model->checkUserExists($_POST["username"])){

            $errors["username"] = "User already exists";
            
        }
        if(!empty($errors)){
            
            view("registerView.php", $errors);

        } else {
            
            $this->registerRequest($model);
        
        }

    }

    public function registerRequest(RegisterModel $model)
    {
        
         $_POST["password"] = password_hash($_POST["password"], PASSWORD_BCRYPT);

        $data = $_POST;

        $user = $model->createUser($data);

        if($user){
            $message["login"] = "Sign up successful! Please log in.";
            view("loginView.php", $message);
            exit();

        } else {

            echo "ERROR";
            $errors["user"] = "Error in saving data, please try again.";
            view("registerView.php", $errors);

        }
    } 
}
