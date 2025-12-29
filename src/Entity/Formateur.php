<?php

class Formateur extends Person{
    private array $coursList = [];

    public function __construct(string $firstname, string $lastname, string $email, Department $departement)
    {
        parent::__construct($firstname, $lastname, $email, $departement);
    }

    

    /**
     * Get the value of courseList
     */ 
    public function getCoursList(): array 
    {
        return $this->coursList;
    }

    /**
     * Set the value of courseList
     *
     * 
     */ 
    public function setCoursList(Cours $cours)
    {
        array_push($this->coursList, $cours);
    }
}