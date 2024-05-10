<?php

class User{
    
    private $firstname;
    private $lastname;
    private $username;
    private $password;

    public function __construct(
        string $firstName,
        string $lastName,
        string $username,
        string $password
    ){
        $this->firstname = $firstName;
        $this->lastname = $lastName;
        $this->username = $username;
        $this->password = $password;
        
    }

    public function getFirstName():string{
        return $this->firstname;
    }

    public function getLastName():string{
        return $this->lastname;
    }

    public function getUsername():string{
        return $this->username;
    }

    public function getPassword():string{
        return $this->password;
    }

    
}