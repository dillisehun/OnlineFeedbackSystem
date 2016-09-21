<?php
error_reporting(E_ALL ^ ~E_WARNING);

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$mysql_hostname="localhost";
$mysql_user = "root";
   $mysql_password = "";
    $mysql_database = "feedback";
    $prefix = "";
$connection =mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
// Selecting Database
$db = mysql_select_db("feedback", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user1'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from admin where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>