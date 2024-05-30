<?php

include base_path("Entity/article.php");

class HomeModel
{

    public static function getArticles()
    {
        $articles = [];
        
        $query = "SELECT * FROM articles;";
        
        $connection = new Connection();

        $getArticlesResult = $connection->getQueryArray($query);

        if(!$getArticlesResult){

            echo "Article query Failed!";

            exit();
        }

        //var_dump($result);
        foreach ($getArticlesResult as $row) {
            $articleObject = new Article();

            $articleObject->setSubject($row['articleSubject']);

            $articleObject->setContent($row['articleContent']);

            $articleObject->setCreationDate($row['creationDate']);

            $userID = $row['userID'];

            $query = "SELECT firstName, lastName FROM users WHERE userID = $userID;";
            
            $getIDResult = $connection->getQuerySingle($query);

            $articleObject->setLastName($getIDResult['lastName']);

            $articleObject->setFirstName($getIDResult['firstName']);

            array_push($articles, $articleObject);
        }

        return $articles;

    }


    
}