<?php

class Department
{
    private string $name;

    private string $description;

    private array $coursList = [];

    public function __construct(string $name, string $description, Cours $cours)
    {
        $this->name = $name;
        $this->description = $description;
        array_push($this->coursList, $cours);
    }



    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * 
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * 
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of cours
     */
    public function getCours(): array
    {
        return $this->coursList;
    }

    /**
     * Set the value of cours
     *
     * 
     */
    public function setCours(Cours $cours)
    {
        array_push($this->coursList, $cours);
    }
}
