<?php

class Users extends Person{
    protected string $usernamer ;

    protected $password;

    public function __construct($first_name, $last_name, $email,$usernamer , $password){
        parent::__construct($first_name,$last_name,$email);
        $this->usernamer = $usernamer ;
        $this->password = $password ;
    }
    //getters

    public function getUsename(){
        return $this->usernamer;
    }
    public function getPassword(){
        return $this->password;
    }

    //setters

    public function setUsername($username){
        $this->usernamer;
    }
    public function setPassword($password){
        $this->password = $password;
    }

}