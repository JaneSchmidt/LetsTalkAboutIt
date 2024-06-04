<?php 

class LogoutController
{

    public static function logoutRequest()
    {
        
        Session::stopSession();
        header("Location: /");
        
    }

}
