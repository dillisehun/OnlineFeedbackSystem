<?php
error_reporting(E_ALL ^ ~E_WARNING);
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
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
// Selecting Database
$db = mysql_select_db("feedback", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
	$_SESSION['login_user1']=$username;
header("location: admin.php"); // Redirecting To Other Page
	}
	 else {
$error2 = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}

?>
