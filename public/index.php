<?php

include "../src/Abstract/Person.php";
include "../src/Entity/User.php";
include "../src/Entity/Cours.php";
include "../src/Entity/Department.php";
include "../src/Entity/Formateur.php";


echo "Write the firstname of the Formateur" . PHP_EOL;

$fname = trim(fgets(STDIN));
echo "Write the lastname  of the Formateur" . PHP_EOL;
$lname=trim(fgets(STDIN));
echo "Write the email of the Formateur" . PHP_EOL;
$email = trim(fgets(STDIN));


echo "Write the name of the department of the Formateur" . PHP_EOL;
$departmentN = trim(fgets(STDIN));
echo "Write the description of the department of the Formateur" . PHP_EOL;
$departmentD = trim(fgets(STDIN));

echo "Write the title of the cours the Formateur teatches" . PHP_EOL;
$coursT = trim(fgets(STDIN));
echo "Write the description of the cours the Formateur teatches" . PHP_EOL;
$coursD = trim(fgets(STDIN));




$cours = new Cours($coursT, $coursD);
$department = new Department($departmentN, $departmentD, $cours);
$Formateur = new Formateur($fname, $lname, $email, $department);
var_dump($Formateur);