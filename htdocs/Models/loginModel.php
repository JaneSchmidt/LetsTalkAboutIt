<?php

class loginModel
{
    public function getUserInfo(string $username)
    {

        $query = "SELECT firstname, lastname FROM users WHERE username = \"$username\";";

        $connection = new Connection();
        
        $name = $connection->getQuerySingle($query);

        Session::setSessionData($name["firstname"], $name["lastname"], $username);

        view("homeView.php");
    }


}
