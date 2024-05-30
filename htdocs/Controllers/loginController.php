<?php 

include base_path("Models/loginModel.php");

class LoginController
{
    // will return a response
    public static function loginRequest()
    {
        $username = htmlspecialchars($_GET["username"]);

        $query = "SELECT pass FROM users WHERE username = \"$username\";";

        $dbConnection = new Connection();

        $result = $dbConnection->getQuerySingle($query);

        $verified = password_verify($_GET["password"], $result["pass"]);

        if($verified){

            $model = new loginModel();

            $model->getUserInfo($username);


        } else { 

            header("Location: /login");

        }
        
    }

}