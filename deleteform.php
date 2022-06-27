<?php
session_start();
require 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Kies een gerecht om te verwijderen</h2>
    <form action="delete.php" method="post">
        <label for="page" name="page">
        <select name="recept">
            <?php
                $client = new MongoDB\Client("mongodb://localhost:27017");
                $collections = array('hoofdgerechten','voorgerechten','nagerechten'); // we maken een lijstje met alle gerechten
                // TO DO: haal dit uit de database...$_COOKIE
                foreach ($collections as $collection)
                {
                    $currentCollection = $client->gerechten->$collection; 
                    $label = substr($currentCollection, strpos($currentCollection, ".") + 1);  
                    echo "<optgroup label='$label'>";
                    $result = $currentCollection->find(); 
                    foreach ($result as $doc) 
                    {
                        echo  ("<option value=".$doc['_id']." name='recept'>". $doc['item']. "</option>");
                    };
                    echo '</optgroup>';

                }
                // $collection = $client->gerechten->hoofdgerechten;
                // $result = $collection->find();
                // foreach ($result as $dc) {
                //     echo  ("<option value=".$dc['_id']." name='recept'>". $dc['item']. "</option>");
                // };
                ?>
            </select>

        </label>
            <input type="submit" value="submit" name="submit" placeholder="submit">
        </form>
    <a href="index.php">home</a>
</body>
</html>