<?php

class User
{

    private string $email;

    private string $password;

    private string $role;

    public function __construct(string $email, string $password, string $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->role = $role; 
    }


    /**
     * Get the value of email
     */ 
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * 
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * 
     */ 
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of role
     */ 
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * 
     */ 
    public function setRole(string $role)
    {
        $this->role = $role;
    }
}
