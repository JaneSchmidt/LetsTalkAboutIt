<?php

include __DIR__ . "/../Entity/User.php";
include __DIR__ . "/../Database/connection.php";

class registerModel{


    public function createUser(array $data) {

        $newUser = new User($data["first-name"], 
                            $data["last-name"], 
                            $data["username"], 
                            $data["password"]);

        $this->storeUser($newUser);
    }

    public function storeUser(User $newUser){
        $query = "INSERT INTO users (userID, firstname, lastname, username, pass) 
                  VALUES (" . $newUser->getFirstName() . ", " . $newUser->getLastName() . 
                  ", " . $newUser->getUsername() . ", " . $newUser->getPassword() . ");";

        var_dump($query);

        


    }
}