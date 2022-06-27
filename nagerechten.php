<?php
session_start();
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->gerechten->nagerechten;
$result = $collection->find();
foreach ($result as $dc) {
    echo $dc["item"];
    echo " , €";
    echo $dc["prijs"];
    echo " = ";
    echo $dc['ingredients'],"<br>", "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="javascript:history.back()">terug</a>
<h3>Klik <a href="addform.php">hier</a> om een recept toe te voegen</h3>
<h3>Klik <a href="deleteform.php">hier</a> om een recept toe te verwijderen</h3>

</body>
</html>