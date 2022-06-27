<?php

function printPost() {
    echo '<pre>';
    if (!empty($_POST)) {
        print_r($_POST);
    }   else{
        echo 'POST is empty';
    }echo '</pre>';
}


require 'vendor/autoload.php';
    if($_POST["submit"]) {
        session_start();
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $collection = $client->gerechten->hoofdgerechten;
        printPost();
        $recept = $_POST['recept'];
        echo $recept;
        $result = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($recept)]);
        header("location: index.php");
    } else {
        header("location: error.php");
    }
?>