<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>

<body>
<div class ="main" id="login">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" action="<?php echo base_url("/login/authorization");?>" >
        <input class="un " id="name" name="username" type="text" align="center" placeholder="Username" value="<?=set_value('username') ?>">
        <input class="pass" id="password" name="password" type="password" align="center" placeholder="Password">
        <input class="submit" name="submit" type="submit" align="center" value="Sign in">
        <p class="forgot" align="center"><a href="#">Forgot Password?</a></p>
    </form>

</div>

</body>
</html>
