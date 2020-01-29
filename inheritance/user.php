<?php 
abstract class User
{
    public $username;
    protected $encryptedPassword;

    public function matchPassword($plainPassword)
    {
        return $this->encryptedPassword === md5($plainPassword);
    }
}