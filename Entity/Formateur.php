<?php

require "../Abstract/User.php";

class Formateur extends User
{

    /* Properties */

    /* Same Properties as User +*/
    private string $firstname;
    private string $lastname;

    /* Constructor */

    public function __construct($firstname, $lastname, $email, $password, $roleID)
    {
        parent::__construct($email, $password, $roleID);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}
