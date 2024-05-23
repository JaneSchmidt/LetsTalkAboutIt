<?php

include __DIR__ . "/../Entity/user.php";

class RegisterModel
{

    public function checkUserExists(string $username)
    {
        $query = "SELECT firstname FROM users WHERE username = \"$username\";";

        $connection = new Connection();
        
        $name = $connection->getQuerySingle($query);

        return $name;
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

        $connection = new Connection();

        $result = $connection->postQuery($query);

        return $result;

    }
}
