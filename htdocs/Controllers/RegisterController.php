<?php

include __DIR__ . "/../Models/registerModel.php";

class RegisterController{


    /*

        validations: 
            password and confimpassword are the same 
            the strings for first name and username are not spaces and are not empty 
            the username does not exist already in the db

    */

    // will return a response 
    public static function registerRequest(){
        echo "why is this being called";
        $data = $_POST;
        $model = new RegisterModel;
        $user = $model->createUser($data);
        if($user){
            header('Location: /login');
        } else {
            echo("error occured");
        }
        
    }
}