<?php
include 'Repository/DepartmentRepository.php';
include 'Entity/Departement.php';
include 'Database/DatabaseConnection.php';
include 'Service/DepartementService.php';

include("Abstract\Person.php");
include("Entity\users.php");

$db = new DatabaseConnection();
$repo = new DepartmentRepository($db);
$departement = new DepartementService($repo);

include("Database\login.php");
include("Entity\Gusers.php");


// $user = new Users('abdellah','ait bhou','abdellhabahou@gmail.com'
// ,'abde123','abdellah123@');


// echo "<pre>";
// var_dump($user);
// echo "<pre/>";


// $query = new Query();
// var_dump($query->fetchAll("SELECT * FROM admins"));

// $login1 = new Login();
// $login1->setEmail("abdellah@gmail.com")->setPass("abde123");
// echo $login1->toString();
// echo $login1->chekLgoin();


echo "Gestion of users : \n";
echo "1 - add user\n
    2 - see all users\n
    3 - update user\n
    4 - delet a user by email
    ";

$admin1 = new Gusers();
// $admin1->addUser('aymen@gmail.com','aymen123',2);
// $admin1->deletUser('aymen@gmail.com');
// $admin1->updateUser('amin@gmail.com','said123',3,'said22@gmail.com');
echo $admin1->fetchAllUsers();  





