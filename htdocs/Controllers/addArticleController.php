<?php

class AddArticleController
{


// in add article use htmlspecialchars() to change all code to string
    public static function addArticle()
    {
        $subject = htmlspecialchars($_POST["subject"]);
        $content = htmlspecialchars($_POST["content"]);
        date_default_timezone_set("America/New_York");
        $date = date("M d, Y");
        echo $_SESSION["username"];
    }
}