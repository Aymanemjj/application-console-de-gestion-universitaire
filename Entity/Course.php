<?php

class Cours
{
    /* Properties */

    private string $title;
    private string $description;
    private string $createdBy;
    private object $department;
    private object $formateur;

    /* Constructor */

    public function __construct($title, $description, $createdBy, $department, $formateur)
    {
        $this->title = $title;
        $this->description = $description;
        $this->createdBy = $createdBy;
        $this->department = $department;
        $this->formateur = $formateur;
    }

    /* Getters & Setters */

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * 
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of createdBy
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set the value of createdBy
     *
     * 
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get the value of department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set the value of department
     *
     * 
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * Get the value of formateur
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set the value of formateur
     *
     * 
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;
    }
}
