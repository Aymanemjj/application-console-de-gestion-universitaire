<?php

require "../Abstract/User.php";
require "../Database/DatabaseConnection.php";
class Admin extends User{

    /* Properties */
    /* Same Properties as User +*/
    private string $firstname;
    private string $lastname;

    
    /* Constructor */
    public function __construct($firstname, $lastname, $email, $password, $roleID){
        parent::__construct($email, $password, $roleID);
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }

    
    /* Getters & Setters */

        /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * 
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * 
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }


    /* Methodes */




    public function CRUDStudents($action){
        $data= 0;
        switch ($action) {
            case 'creat':
                $this->creatStudent($data);
                break;
            case 'read':
                $this->readStudent();
                break;
            case 'update':
                updateStudent();
                break;
            case 'delete':
                deleteStudent();
                break;
            default:
                break;
        }
    }

    public function creatStudent(){
        global $connection;
        $id = $this->insertUser();
        $sql = "INSERT INTO etudiants (id, firstname, lastname) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            $id,
            $this->firstname,
            $this->lastname
        ]);
    }

    public function readStudent(){
        global $connection;
        $sql = "SELECT  ";
    }

}