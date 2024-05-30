<?php


class Session{ 


    public function startSession(){
        if(session_status() === PHP_SESSION_ACTIVE){
            echo "Session has been started!";
        }

        if(headers_sent($filename, $line)){
            echo("Headers have been sent!");
        }
        session_start();

    }

    public function stopSession(){
        session_destroy();
    }
}