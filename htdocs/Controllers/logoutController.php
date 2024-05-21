<?php 


class LogoutController
{

    public static function logoutRequest()
    {

        $session = new Session();
        $session->stopSession();
        header("Location: /");

        
    }

}
