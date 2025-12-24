<?php

class User
{
    /* Properties */

/*  protected string $firstname;
    protected string $lastname;
 */    
    protected string $email;
    protected string $password;
    protected int $roleID;
/*  protected object $department;
 */
    /* Constructor */

    public function __construct($firstname, $lastname, $email, $password, $roleID)
    {
        $this->email = $email;
        $this->password = $password;
        $this->roleID = $roleID;
    }

    /* Getters & Setters */


    /* Get the value of email */

    public function getEmail()
    {
        return $this->email;
    }

    /* Set the value of email */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /* Set the value of password */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->roleID;
    }

    /* Set the value of role */
    public function setRole($roleID)
    {
        $this->roleID = $roleID;
    }

    /* Methodes */

    protected function insertUser(){
        global $connection;
        $sql = "INSERT INTO users (email, password, role_id) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([
            $this->email,
            password_hash($this->password, PASSWORD_DEFAULT),
            $this->roleID
        ]);
        return (int)$connection->lastInsertId();
    }

}
