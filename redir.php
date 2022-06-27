<?php
    session_start();
    $_SESSION["recept"] = $_POST["recept"];
    $_SESSION["prijs"] = $_POST["prijs"];
    $_SESSION["ingredients"] = $_POST["ingredients"];
    $page = $_POST["page"];
    switch($page) {
        case "voor":
            header("location: voorgerechten.php");
            break;
        case "hoofd":
            header("location: hoofdgerechten.php");
            break;
        case "na":
            header("location: nagerechten.php");
            break;
        default:
            header("location: index.php");
    };
?>