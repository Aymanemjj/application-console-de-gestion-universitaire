<?php

class Student extends Person{
    private array $coursList = [];

    private Department $department;

    public function __construct(Cours $cours , Department $department)
    {
        array_push($this->coursList, $cours);
        $this->$department = $department;;
    }



    /**
     * Get the value of coursList
     */ 
    public function getCoursList(): array
    {
        return $this->coursList;
    }

    /**
     * Set the value of coursList
     *
     * 
     */ 
    public function setCoursList(Cours $cours)
    {
        array_push($this->coursList, $cours);
    }

    /**
     * Get the value of department
     */ 
    public function getDepartment(): Department
    {
        return $this->department;
    }

    /**
     * Set the value of department
     *
     * 
     */ 
    public function setDepartment(Department $department)
    {
        $this->department = $department;
    }
}