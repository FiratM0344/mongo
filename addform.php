<?php
session_start();
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
    <form action="add.php" method="post">
        <input type="text" name="recept" placeholder="Recept naamn">
        <input type="number" name="prijs" placeholder="Recept prijs">
        <input type="text" name="ingredients" placeholder="Recept ingredienten">
        <p>Watvoor gerecht is het?</p>
        <label for="page" name="page">
            <select name="page">
                <option value="voor" name="voor">Voorgerechten</option>
                <option value="hoofd" name="hoofd">Hoofdgerechten</option>
                <option value="na" name="na">Nagerechten</option>
            </select>
        </label><br>
        <input type="submit" value="submit" name="submit" placeholder="submit">
    </form>
    <a href="index.php">home</a>
</body>
</html>