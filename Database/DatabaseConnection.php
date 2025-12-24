<?php 
try {
    $dsn = "mysql:host=localhost;dbname=g_universitaire";
    $connection = new PDO($dsn, 'root', 'O2H2sql');
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo $e -> getMessage();
}

