<?php

include_once base_path("Entity/article.php");

class AddArticleModel
{
    public function getUserId(string $username):int
    {

        $query = "SELECT userID FROM users WHERE username = \"$username\";";
    
        $connection = new Connection();

        $result = $connection->getQuerySingle($query);

        return $result["userID"];

    }
    
    public function createArticle(string $creationDate,  
                                    int $userID,
                                    string $subject, 
                                    string $content) 
    {

        $newArticle = new Article();
        $newArticle->setCreationDate($creationDate);
        $newArticle->setUserID($userID);
        $newArticle->setSubject($subject);
        $newArticle->setContent($content);

        return $this->storeArticle($newArticle);
    }


    public function storeArticle(Article $newArticle)
    {

        $creationDate = $newArticle->getCreationDate();

        $userID = $newArticle->getUserID();

        $subject = $newArticle->getSubject();

        $content = $newArticle->getContent();

        // escaping single quotes
        $subject = str_replace("'", "\'", $subject);

        $content = str_replace("'", "\'", $content);

        $query = "INSERT INTO articles (creationDate, modificationDate, userID, articleSubject, articleContent) 
                  VALUES (\"$creationDate\", null, $userID, '$subject', '$content');";
        echo $query;

        $connection = new Connection();

        $result = $connection->postQuery($query);

        return $result;

    }
}
