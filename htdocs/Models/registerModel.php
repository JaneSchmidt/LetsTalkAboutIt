<?php

include __DIR__ . "/../Entity/User.php";
include __DIR__ . "/../Database/connection.php";

class registerModel{

    public function createUser(array $data) {

        $newUser = new User($data["first-name"], 
                            $data["last-name"], 
                            $data["username"], 
                            $data["password"]);

        return $this->storeUser($newUser);
    }

    public function storeUser(User $newUser){
        $firstName = $newUser->getFirstName();
        $lastName = $newUser->getLastName();
        $username = $newUser->getUsername();
        $pass = $newUser->getPassword();

        $query = "INSERT INTO users (userID, firstname, lastname, username, pass) 
                  VALUES (8, \"$firstName\", \"$lastName\", \"$username\", \"$pass\");";
        

        $connection = Connection::getConnection();
        
        $result = mysqli_query($connection, $query);
        var_dump($result);

        if(!$result){
            return(0);
        } else {
            return(1);
        }

    }
}