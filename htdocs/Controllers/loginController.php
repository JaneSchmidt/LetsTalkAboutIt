<?php 

include __DIR__ . "/../Models/loginModel.php";

class LoginController
{


    // will return a response
    public static function loginRequest()
    {
        $username = $_GET["username"];

        $query = "SELECT pass FROM users WHERE username = \"$username\";";
        $connection = Connection::getConnection();    
        $result = mysqli_query($connection, $query);
        $nameRow = mysqli_fetch_assoc($result);

        $verified = password_verify($_GET["password"], $nameRow["pass"]);

        if($verified){
            $model = new loginModel();
            $model->getUserInfo($username);

        } else { 
            header("Location: /login");
        }
        
    }

}
