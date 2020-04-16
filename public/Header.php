<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="uft-8">
    <meta name="description" content="This is an example of a meta description. this will often show up in seach results">
    <meta name="vieuwport" content="width=device-with, initial-scale=1">
    <link rel="stylesheet" href="stylsheets/stylesheet.css">
</head>

<body>
<header>

    <ul id="HeaderUL">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="profiel.php">profiel</a></li>
    </ul>


    <div>
        <form action="maplogin/loguit.php" method="post" id="login">
            <button type="submit" name="uitloggen">log uit</button>
        </form>
        <form action="inloggen.php" method="post" id="login">
            <button type="submit" name="inloggen">login</button>
        </form>
    </div>
</header>
</body>
