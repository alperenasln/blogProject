<?php
include 'db_connection.php';
session_start();
$error='';
if(isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or password is invalid";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conn = openCon();
        //QUERY
        $query = "SELECT username,password from users where username=? AND password=? LIMIT 1";
        //QUERYING
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if ($stmt->fetch())
            $_SESSION['login_user'] = $username;
        header("location: home.php");

    }
    closeCon($conn);
}
/*
$userQuery = $conn->query("SELECT * FROM users");
if($conn->errno >0){
    die("<b>Query error:</b> " .$conn->error);
}
$output = $userQuery->fetch_array();
if($userQuery->num_rows >0){
    while($output = $userQuery->fetch_assoc()){
        echo "ID: " .$output["id"] . "<br /> Username: " . $output["username"] . "<br /> Password: " . $output["password"];

    }
}
*/
?>









