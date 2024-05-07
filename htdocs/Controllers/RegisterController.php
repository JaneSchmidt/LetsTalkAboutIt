<?php

include __DIR__ . "/../Models/registerModel.php";

class RegisterController{


    // will return a response 
    public static function registerRequest(){
        $data = $_POST;
        $model = new RegisterModel;
        $user = $model->createUser($data);
        var_dump($user);
        
    }
}