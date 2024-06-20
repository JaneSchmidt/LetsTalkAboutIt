<?php

include_once base_path("Entity/comment.php");

class AddCommentModel
{
    public function getUserId(string $username):int
    {

        $query = "SELECT userID FROM users WHERE username = \"$username\";";
    
        $connection = new Connection();

        $result = $connection->getQuerySingle($query);

        return $result["userID"];

    }
    
    public function createComment(string $creationDate,  
                                    int $userID,
                                    int $commentID,
                                    string $firstName,
                                    string $lastName, 
                                    string $content) 
    {

        $newComment = new Comment();
        $newComment->setCreationDate($creationDate);
        $newComment->setUserID($userID);
        $newComment->setArticleID($commentID);
        $newComment->setFirstName($firstName);
        $newComment->setLastName($lastName);
        $newComment->setContent($content);

        return $this->storeComment($newComment);
    }


    public function storeComment(Comment $newComment)
    {

        $creationDate = $newComment->getCreationDate();

        $userID = $newComment->getUserID();

        $articleID = $newComment->getArticleID();

        $userID = $newComment->getUserID();

        $content = $newComment->getContent();

        $query = "INSERT INTO Comments (creationDate, modificationDate, articleID, userID, content) 
                  VALUES (\"$creationDate\", null, $articleID, $userID, '$content');";

        $connection = new Connection();

        $result = $connection->postQuery($query);
        
        return $result;

    }

    public static function getComments(int $articleID)
    {
        $comments = [];
        
        $query = "SELECT * FROM comments WHERE articleID = $articleID;";
        
        $connection = new Connection();

        $getCommentsResult = $connection->getQueryArray($query);

        if(!$getCommentsResult){

            echo "comment query Failed!";

            exit();
        }

        foreach ($getCommentsResult as $row) {

            $commentObject = new Comment();

            $commentObject->setContent($row['content']);

            $commentObject->setCreationDate($row['creationDate']);

            if($row['modificationDate']){
                $commentObject->setModificationDate($row['modificationDate']);
            }

            $userID = $row['userID'];

            $query = "SELECT firstName, lastName FROM users WHERE userID = $userID;";
            
            $getIDResult = $connection->getQuerySingle($query);

            $commentObject->setLastName($getIDResult['lastName']);

            $commentObject->setFirstName($getIDResult['firstName']);

            array_push($comments, $commentObject);
        }

        return $comments;

    }
}
