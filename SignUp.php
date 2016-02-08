<?php

/*** mysql hostname ***/
$hostname = '127.0.0.1';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=game_on', 'root', 'root');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'])
{    $errorMessage = false;

    if(empty($_POST['firstname']))
    {
        $errorMessage = "<li>Enter your first name!</li>";
    }
    if(empty($_POST['username']))
    {
        $errorMessage = "<li>Enter a username!</li>";
    }
    if(empty($_POST['email']))
    {
        $errorMessage = "<li>Enter your email!</li>";
    }

    if(empty($_POST['password']))
    {
        $errorMessage = "<li>Enter your password!</li>";
    }


    $stmt = $dbh->prepare("INSERT INTO signup (id, firstname, username, email, password) VALUES (:id, :firstname, :username, :email, :password)");

    $result = $stmt->execute(
        array(
            'id' => NULL,
            'firstname' => $_POST['firstname'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        )
    );

    if(!$result){

    }
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}
?>





<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" media="all" href="stylesheet.css">
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>

</head>
<body>
<div id="nav">
    <div id="name1"><a href="index.html"><h1>Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n</h1></a></div>
    <div id="n4me">
        <h1>Sign up</h1>
    </div>
    <div class="right">
        <a href="signUp.html"><p id="su">Sign up</p></a>
        <a href="signIn.html"><p id="si">Sign in</p></a>
        <div style="clear: both;"></div>
    </div>

</div>
<div id="form">
    <center>
        <form>
            <h2 id="signsup">Register for Game<img id="on" src="pictures/on.png" alt="on" style="width:40px;height:40px;">n </h2>
            <label>Name :</label>
            <input type="text" name="dname" id="name"> <br><br>
            <label>Email :</label>
            <input type="text" name="demail" id="email"> <br><br>
            <label> Username : </label>
            <input type="text" name="dusername" id="username"> <br><br>
            <label>Password :</label>
            <input type="password" name="password" id="password"><br><br>


            <br>
            <input type="button" name="register" id="register" value="Register">

        </form>



</body>
</html>