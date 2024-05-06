<?php

include "/../Entity/User.php";

class RegisterModel{



    public function createUser(array $data):User {

        $newUser = new User($data["first-name"], 
                            $data["last-name"], 
                            $data["username"], 
                            $data["password"]);

        return $newUser;
    }
}