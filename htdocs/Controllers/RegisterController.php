<?php

include "/../Models/registerModel.php";

class RegisterController{


    // will return a response 
    public static function registerRequest(){
        var_dump($_POST);
        $data = $_POST;
        $model = new RegisterModel;
        $user = $model->createUser($data);
        
    }
}