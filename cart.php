<?php
/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=game_on", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
session_start();





?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>
<body>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" media="all" href="stylesheet.css">
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>


</head>
<body>
<div id="nav">
    <div id="name1"><a href="index.php"><h1>Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n</h1></a></div>
    <div id="n4me">
        <h2>Cart</h2>
    </div>
    <div class="right">
        <a href="SignUp.php"> <p id="su">Sign up</p></a>
        <a href="SignIn.php"><p id="si">Sign in</p></a>
        <a href="cart.php"><p id="ct">Cart</p></a>
        <div style="clear: both;"></div>
    </div>
</body>
</html>
