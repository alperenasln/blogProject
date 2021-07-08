<?php
include ('db_connection.php');
$conn = openCon();
session_start();
$user_check = $_SESSION['login_user'];
//QUERY
$query = "SELECT username from users where username = '$user_check'";
$ses_sql = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>
