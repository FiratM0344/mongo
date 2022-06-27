<?php
    if($_POST["submit"]) {
        session_start();
        require 'vendor/autoload.php';
        $recept = $_POST["recept"];
        $prijs = $_POST["prijs"];
        $ingredients = $_POST["ingredients"];
        $page = $_POST["page"];
        $client = new MongoDB\Client("mongodb://localhost:27017");
        if ($page == "voor") {
            $collection = $client->gerechten->voorgerechten;
        }   elseif ($page == "hoofd") {
            $collection = $client->gerechten->hoofdgerechten;
        }   elseif ($page == "na") {
            $collection = $client->gerechten->nagerechten;
        };
        $result = $collection->insertOne(['item' => $recept, 'prijs' => $prijs, 'ingredients' => $ingredients]);
        header("location: index.php");
    } else {
        header("location: error.php");
    }
?>