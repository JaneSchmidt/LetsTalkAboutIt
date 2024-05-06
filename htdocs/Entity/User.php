<?php

class User{
    
    private $firstname;
    private $lastName;
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

    
}