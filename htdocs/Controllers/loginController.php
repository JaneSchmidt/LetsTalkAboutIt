<?php 


include __DIR__ . "/../Models/loginModel.php";
class LoginController{


    // will return a response
    public static function loginRequest(){
        $username = $_GET["username"];

        $hashedPass = password_hash($_GET["password"], PASSWORD_BCRYPT);


        $model = new loginModel();
        $result = $model->verifyUser($username, $hashedPass);
        if(!$result){
            echo "Username or password is incorrect";
        } else {
            header("Location: /");
            // echo $result["firstname"] . $result["lastname"];
        }
    }



}

