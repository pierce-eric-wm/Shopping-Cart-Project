<?php
/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=game_on", $username, $password);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
session_start()



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
    <div id="name1"><a href="index.php"><h1>Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n</h1></a>
    </div>
    <div id="n4me">
        <h2>Cart</h2>
    </div>
    <div class="right">
        <a href="SignUp.php"> <p id="su">Sign up</p></a>
        <a href="SignIn.php"><p id="si">Sign in</p></a>
        <a href="cart.php"><p id="ct">Cart</p></a>
        <div style="clear: both;">

        </div>
    </div>
    </div>
    <br>
    <div id="cartTable">
    <table id="table">
    <tr>
     <th class="CartTable"><h1>Cover</h1></th>
     <th class="CartTable"><h1>Title Name</h1></th>
     <th class="CartTable"><h1>Price</h1></th>
    </tr>
        <tr>
            <td><img id=cause src="pictures/1.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/2.jpg"></td>
            <td><p>Star Wars: Battle Front 3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/3.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/4.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/5.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/1.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/1.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>

        <tr>
            <td><img id=cause src="pictures/1.jpg"></td>
            <td><p>Just Cause:3</p></td>
            <td><p>$60</p></td>
        </tr>
    </table>
</div>
</body>
</html>
