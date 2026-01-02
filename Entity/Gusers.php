<?php


class Gusers extends DatabaseConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addUser(string $email, string $pass, int $role)
    {
        $check = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $check->execute([':email' => $email]);
        $result = $check->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return "this user was exist";
        }
        $stmt = $this->pdo->prepare("INSERT INTO `users` (`email`, `password`, `role_id`) VALUES (:email,:password,:role_id)");
        $stmt->execute([
            ':email' => $email,
            ':password' => $pass,
            ':role_id' => $role
        ]);
    }

    public function deletUser($email)
    {
        $check = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $check->execute([':email' => $email]);
        $result = $check->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return "email is not exit";
        }
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return "the user deleted with success";
    }

    public function updateUser(string $email, string $pass, int $role,string $new_email)
    {
        $check = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $check->execute([':email' => $email]);
        $result = $check->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return "email is not exit";
        }

        $stmt = $this->pdo->prepare("UPDATE users SET email= :newEmail , password = :password , role_id = :role WHERE email = :email ");
        $stmt->execute([
            ':newEmail' => $new_email,
            ':password' => $pass,
            ':role' => $role,
            ':email' => $email
        ]);
    }

    public function fetchAllUsers(){
        $stmt =$this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        for ($i=0; $i <count($result) ; $i++) { 
            echo "id :".$result[$i]['id']."email : ".$result[$i]['email']."password : ".$result[$i]['password']."<br/>";
        }
    }


}