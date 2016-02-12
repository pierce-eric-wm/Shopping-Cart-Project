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

$registered = $_SESSION["registered"];
//$username = $_SESSION["username"];

if(isset($_SESSION['username'])){
   //header('location: index.php');
}

$error = false;
$success = false;

if(@$_POST['login']) {
    if (!$_POST['username']) {
    }
    if (!$_POST['password']) {
    }

    $query = $dbh->prepare("SELECT * FROM signup WHERE username = :username AND password = :password");
    $result = $query->execute(
        array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        )
    );
    $userinfo = $query->fetch();
    if ($userinfo) {

        $success = "User, " . $_POST['username'] . " was successfully logged in.";

        $_SESSION["firstname"] = $userinfo['firstname'];
        $_SESSION["username"] = $userinfo['username'];

        header("Location: index.php");
    } else {
        $success = "There was an error logging into the account.";
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" media="all" href="stylesheet.css">
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>


</head>

<div id="nav">
    <div id="name1"><a href="index.php"><h1>Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n</h1></a></div>
    <div id="n4me">
        <h2>Sign In</h2>
    </div>
    <div class="right">
        <a href="SignUp.php"> <p id="su">Sign up</p></a>
        <a href="SignIn.php"><p id="si">Sign in</p></a>
        <a href="cart.php"><p id="ct">Cart</p></a>
        <div style="clear: both;"></div>
    </div>

</div>
<div id="SignInto">
    <form method="post">
<h2 id="h2o">Sign - In</h2>
<label>Username :</label>
<input type="text" name="username" id="name"> <br><br>
<label> Password :</label>
<input type="password" name="password" id="passsword"> <br><br>
        <button type="submit" name="login" value="1">Sign In</button>
</form>
<div id="buttonsu">
    <a href="SignUp.php">
        <button>Sign Up</button>
    </a>
</div>
</div>
</html>