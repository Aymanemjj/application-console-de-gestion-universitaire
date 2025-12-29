<?php

class Cours
{
    private string $title;

    private string $description;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * 
     */ 
    public function setTitle(string $title)
    {
        $this->title = $title;
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

}
