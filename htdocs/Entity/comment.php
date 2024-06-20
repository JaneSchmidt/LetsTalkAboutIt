<?php

class Comment
{
    private $content;
    private $userID;
    private $articleID;
    private $creationDate;
    private $modificationDate;
    private $firstName;
    private $lastName;

    //setters

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setUserID(string $userID)
    {
        $this->userID = $userID;
    }

    public function setArticleID(string $articleID)
    {
        $this->articleID = $articleID;
    }

    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function setModificationDate(string $modificationDate)
    {
        $this->modificationDate = $modificationDate;
    }

    public function getFirstName():string
    {
        return $this->firstName;
    }


    public function getLastName():string
    {
        return $this->lastName;
    }

    
    //getters

    public function getcontent():string
    {
        return $this->content;
    }

    public function getUserID():string
    {
        return $this->userID;
    }

    public function getArticleID(): string
    {
        return $this->articleID;
    }


    public function getcreationDate():string
    {
        return $this->creationDate;
    }

    public function getModificationDate():?string
    {
        return $this->modificationDate;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }


    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }
}
