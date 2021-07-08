<?php
include('login.php');

if(isset($_SESSION['login_user'])){
    header("location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>

<body>
<div class ='main' id="login">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" action="login.php" method="post">
        <input class="un " id="name" name="username" type="text" align="center" placeholder="Username">
        <input class="pass" id="password" name="password" type="password" align="center" placeholder="Password">
        <input class="submit" name="submit" type="submit" align="center" value="Sign in">
        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
    </form>

</div>

</body>
</html>
