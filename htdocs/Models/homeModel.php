<?php

include __DIR__ . "/../Entity/Article.php";

class HomeModel{

    public static function getArticles(){
        $result = [];
        
        $query = "SELECT * FROM articles;";
        
        $connection = Connection::getConnection();
        
        $articles = mysqli_query($connection, $query);

        if(!$articles){
            echo "Article query Failed!";
            exit();
        }

        while($row = mysqli_fetch_assoc($articles)){
            $articleObject = new Article();
            $articleObject->setSubject($row['articleSubject']);
            $articleObject->setContent($row['articleContent']);
            $articleObject->setCreationDate($row['creationDate']);

            $userID = $row['userID'];
            $query = "SELECT firstName, lastName FROM users WHERE userID = $userID;";
            $name = mysqli_query($connection, $query);
            $nameRow = mysqli_fetch_assoc($name);
            $articleObject->setLastName($nameRow['lastName']);
            $articleObject->setFirstName($nameRow['firstName']);

            array_push($result, $articleObject);
        }


        return $result;

    }


    
}