<?php
require_once "user.php";

class Person extends User
{
    public $name;

    public function __construct($username, $password, $name)
    {
        $this->username = $username; 
        $this->encryptedPassword = md5($password);
        $this->name = $name;
    }
}