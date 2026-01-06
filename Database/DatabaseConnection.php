<?php

class DatabaseConnection
{
    protected $pdo;
    protected $usernamer = 'root';
    protected $dbname = 'g_universitaire';
    protected $password = '';
    public function __construct()
    {
        try {
            $dsn = "mysql:host=localhost;dbname=" . $this->dbname;
            $this->pdo = new PDO($dsn, $this->usernamer, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connection passer avec succce <br/>";
        } catch (Exception $e) {
            die('pas de connection' . $e->getMessage());
        }

    }
    public function connection()
    {
        return $this->pdo;
    }
}
