<?php

class Department
{

    /* Properties */

    private string $name;
    private string $description;
    private string $cours;

    /* Constructor */

    public function __construct($name, $description, $cours)
    {
        $this->name = $name;
        $this->description = $description;
        $this->cours = $cours;
    }

    /* Getters & Setters */




    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * 
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Get the value of cours
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set the value of cours
     *
     * 
     */
    public function setCours($cours)
    {
        $this->cours = $cours;
    }
}
