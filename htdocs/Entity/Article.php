<?php

class Article
{
    
    private $creationDate;
    private $modificationDate;
    private $userID;
    private $subject;
    private $content;
    private $firstName;
    private $lastName;
    private $articleID;


    // Getters

    public function getSubject():string
    {
        return $this->subject;
    }

    public function getContent():string
    {
        return $this->content;
    }

    public function getUserID():string
    {
        return $this->userID;
    }

    public function getModificationDate(): ?string
    {
        return $this->modificationDate;
    }


    public function getCreationDate():string
    {
        return $this->creationDate;
    }

    public function getFirstName():string
    {
        return $this->firstName;
    }


    public function getLastName():string
    {
        return $this->lastName;
    }

    public function getArticleID():int
    {
        return $this->articleID;
    }


    // Setters

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setUserID(string $userID)
    {
        $this->userID = $userID;
    }

    public function setModificationDate(string $modificationDate)
    {
        $this->modificationDate = $modificationDate;
    }


    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }


    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function setArticleID(int $articleID)
    {
        $this->articleID = $articleID;
    }

}
