<?php 

include base_path("Models/loginModel.php");

class LoginController
{
    // will return a response
    public static function loginRequest()
    {

        $username = htmlspecialchars($_GET["username"]);

        if(!Validator::string($username, 20) || !Validator::string($_GET["password"], 20)){

            echo "here";
            $errors["login"] = "Username or password is incorrect.";
            view("loginView.php", $errors);
        
        } else {

            $query = "SELECT pass FROM users WHERE username = \"$username\";";

            $dbConnection = new Connection();

            $result = $dbConnection->getQuerySingle($query);

            $verified = password_verify($_GET["password"], $result["pass"]);

            if($verified){

                $model = new loginModel();

                $model->getUserInfo($username);

            } else { 

                $errors["login"] = "Username or password is incorrect.";
                view("loginView.php", $errors);

            }
        }
        
    }

}