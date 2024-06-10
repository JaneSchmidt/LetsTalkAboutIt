<?php

include base_path("Models/addArticleModel.php");

class AddArticleController
{

    public function validations(){

        $errors = [];

        if($userErr = Validator::string($_POST["subject"], null, 4)){

            $errors["subject"] = $userErr;
        }

        if($userErr = Validator::string($_POST["content"], null, 4)){

            $errors["content"] = $userErr;
        }

        if(!empty($errors)){
            
            view("addArticleView.php", $errors);

        } else {
            
            $this->addArticle();
        
        }
    }



    public function addArticle()
    {

        date_default_timezone_set("America/New_York");
        $date = date("M d, Y");

        $model = new AddArticleModel();

        $id = $model->getUserId($_SESSION["username"]);

        $article = $model->createArticle($date, $id, $_POST["subject"], $_POST["content"]);

        if($article){
            header("Location: /");
            exit();

        } else {

            echo "ERROR";
            $errors["article"] = "Error in saving data, please try again.";
            view("addArticleView.php", $errors);

        }

    }
}