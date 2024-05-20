<?php

class Article
{
    
    private $subject;
    private $content;
    private $FirstName;
    private $creationDate;
    private $LastName;



    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setFirstName(string $FirstName)
    {
        $this->FirstName = $FirstName;
    }

    public function setLastName(string $LastName)
    {
        $this->LastName = $LastName;
    }

    public function setCreationDate(string $creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function getsubject():string
    {
        return $this->subject;
    }

    public function getcontent():string
    {
        return $this->content;
    }

    public function getFirstName():string
    {
        return $this->FirstName;
    }

    public function getLastName(): string
    {
        return $this->LastName;
    }


    public function getcreationDate():string
    {
        return $this->creationDate;
    }

}
