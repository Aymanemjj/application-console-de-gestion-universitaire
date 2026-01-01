<?php
include 'Entity/Departement.php';
include 'Service/DepartementService.php';


echo 'Insert name: ' ;
$name1 = trim(fgets(STDIN));
echo PHP_EOL;
echo 'Insert description: ';
$description1 = trim(fgets(STDIN));

$departement = new Departement($name1, $description1);
// $departement2 = new Departement('Agora2', '1234567');

$create = new DepartementService();

$create->create($departement);
// $create->create($departement2);

$values = $create->getDepartements();

foreach ($values as $value) {
    var_dump($value);
}