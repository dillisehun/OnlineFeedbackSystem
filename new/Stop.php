<?php
error_reporting(E_ALL ^ ~E_WARNING);
session_start(); // Starting Session
// Define $username and $password
$username=$_SESSION['login_user'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
 $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "feedback";
    $prefix = "";
    $connection = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
   
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("feedback", $connection);
$query = mysql_query("update login set flag=1", $connection);
header("Location: admin.php"); // Redirecting To Home Page
mysql_close($connection); // Closing Connection
?>