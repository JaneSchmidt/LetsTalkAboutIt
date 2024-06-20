<?php

require_once __DIR__ . "/../Models/addCommentModel.php";

class AddCommentController
{

    public function validations(){

        $errors = [];

        if($userErr = Validator::string($_POST["comment"], null, 4)){

            $errors["comment"] = $userErr;
        }

        if(!empty($errors)){
            
            view("fullArticleView.php", $errors);

        } else {
            
            $this->addContent();
        
        }
    }



    public function addContent()
    {

        date_default_timezone_set("America/New_York");
        $date = date("M d, Y");

        $model = new AddCommentModel();

        $userID = $model->getUserId($_SESSION["username"]);
        $articleID = 15;

        $comment = $model->createComment($date, $userID, $articleID, $_SESSION["first-name"], $_SESSION["last-name"], $_POST["comment"]);

        if(!$comment){
            view("fullArticleView.php"); 
            exit();

        } else {

            $errors["comment"] = "Error in saving data, please try again.";
            view("fullArticleView.php", $errors);
            exit();

        }

    }
}