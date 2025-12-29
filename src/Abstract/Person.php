<?php
abstract class Person
{
    protected string $firstname;

    protected string $lastname;

    protected string $email;

    protected Department $departement;

    public function __construct(string $firstname, string $lastname, string $email, Department $departement)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->departement = $departement;
    }
    

    /**
     * Get the value of firstname
     */ 
    protected function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * 
     */ 
    protected function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of lastname
     */ 
    protected function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * 
     */ 
    protected function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get the value of email
     */ 
    protected function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * 
     */ 
    protected function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of departement
     */ 
    protected function getDepartement(): Department
    {
        return $this->departement;
    }

    /**
     * Set the value of departement
     *
     * 
     */ 
    protected function setDepartement(Department $departement)
    {
        $this->departement = $departement;
    }
}
