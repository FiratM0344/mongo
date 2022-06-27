<?php
session_start();
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>gerechten</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h2 style="background-color: red;"> voorgerechten </h2>
                <form action="voorgerechten.php">
                    <input type="submit" value="zie alle voorgerechten"></input>
                </form> 
            </div>
            <div class="col-4">
                <h2> hoofdgerechten </h2>
                <form action="hoofdgerechten.php">
                    <input type="submit" value="zie alle hoofdgerechten"></input>
                </form> 
            </div>
            <div class="col-4">
                <h2> nagerechten </h2>
                <form action="nagerechten.php">
                    <input type="submit" value="zie alle nagerechten"></input>
                </form> 
            </div>
        </div>
        <h3>Klik <a href="addform.php">hier</a> om een recept toe te voegen</h3>
        <h3>Klik <a href="deleteform.php">hier</a> om een recept toe te verwijderen</h3>
    </div><br>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>