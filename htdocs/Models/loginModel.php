<?php

class loginModel
{
    public function getUserInfo(string $username)
    {

        $query = "SELECT firstname, lastname FROM users WHERE username = \"$username\";";
        $connection = Connection::getConnection();
        $result = mysqli_query($connection, $query);
        $nameRow = mysqli_fetch_assoc($result);
        header('Location: /');
    }


}
