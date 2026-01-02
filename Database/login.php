<?php


class Login extends DatabaseConnection
{
    private $email;
    private $pass;


    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }





    public function chekLgoin()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->execute([
            ':email' => $this->email,
            ':password' => $this->pass
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $message = "your login is done <br/>";
        } else {
            $message = "your acount is not exit <br/>";
        }

        return $message;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    public function toString()
    {
        return "your amail is :" . $this->getEmail() . "<br/>your password is : " . $this->pass ."<br/>";
    }
}