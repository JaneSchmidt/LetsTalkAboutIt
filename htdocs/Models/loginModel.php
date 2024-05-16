<?php




class loginModel{

    public function verifyUser(string $username, string $password){
        $query = "SELECT firstname, lastname FROM users WHERE username = \"$username\" AND pass = \"$password\";";
        
        $connection = Connection::getConnection();
        
        $result = mysqli_query($connection, $query);
        $nameRow = mysqli_fetch_assoc($result);

        return $nameRow;
    }


}