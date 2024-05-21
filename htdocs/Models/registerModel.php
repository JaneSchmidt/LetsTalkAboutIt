<?php

class RegisterModel
{

    public function checkUserExists(string $username){
        $query = "SELECT firstname FROM users WHERE username = \"$username\";";

        $connection = Connection::getConnection();
        $result = mysqli_query($connection, $query);
        $rows = mysqli_fetch_assoc($result);
        if($rows){
            return 1;
        }
        return 0;
    }
    public function createUser(array $data) 
    {

        $newUser = new User($data["first-name"], 
                            $data["last-name"], 
                            $data["username"], 
                            $data["password"]);

        return $this->storeUser($newUser);
    }

    public function storeUser(User $newUser)
    {
        $firstName = $newUser->getFirstName();
        $lastName = $newUser->getLastName();
        $username = $newUser->getUsername();
        $pass = $newUser->getPassword();

        $query = "INSERT INTO users (firstname, lastname, username, pass) 
                  VALUES ( \"$firstName\", \"$lastName\", \"$username\", \"$pass\");";

        $connection = Connection::getConnection();
        $result = mysqli_query($connection, $query);
        var_dump($result);

        // why am i not returning result
        if(!$result){
            return(0);
        } else {
            return(1);
        }

    }
}
