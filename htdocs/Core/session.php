<?php


class Session{ 

    public static function setSessionData($firstname, $lastname, $username){

        $_SESSION["first-name"] = $firstname;
        $_SESSION["last-name"] = $lastname;
        $_SESSION["username"] = $username;
    }

    public function stopSession(){
        $_SESSION = [];
        session_destroy();
    }
}