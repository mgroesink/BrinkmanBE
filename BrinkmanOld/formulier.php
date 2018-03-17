<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title>
        My first PHP form
    </title>
</head>
<body></body>
<form action="verwerken.php" method="post">
    Uw naam: <input type="text" name="naam" />
    <input type="hidden" name="taal" value="false">
    <br>
    Kies een taal:
    <input type="radio" name="taal" value="N">Nederlands
    <input type="radio" name="taal" value="E">Engels
    <input type="radio" name="taal" value="S">Spaans
    <br>
    <input type="submit" name="submit" value="Versturen">
</form>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 20-1-2018
 * Time: 22:26
 */