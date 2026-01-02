<?php
include 'Repository/DepartmentRepository.php';
include 'Entity/Departement.php';
include 'Database/DatabaseConnection.php';
include 'Service/DepartementService.php';


$db = new DatabaseConnection();
$repo = new DepartmentRepository($db);
$departement = new DepartementService($repo);
