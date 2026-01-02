<?php
class Course
{
    private $title;
    private $description;

    //getters
    public function getTitle()
    {
        return $this->title;
    }
    public function getdescription()
    {
        return $this->description;
    }

    //setters

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function steDescription($description)
    {
        $this->description = $description;
    }
}