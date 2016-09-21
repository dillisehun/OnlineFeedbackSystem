<?php
error_reporting(E_ALL ^ ~E_WARNING);
session_start(); // Starting Session
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter Username & Password";
}
else
{
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
$query = mysql_query("select * from login where stu_pass='$password' AND (stu_rollno='$username' OR stu_id='$username')", $connection);
$rows = mysql_num_rows($query);
$data_sql=mysql_query("select flag from login where stu_pass='$password' AND (stu_rollno='$username' OR stu_id='$username')", $connection);
$f = mysql_fetch_assoc($data_sql);
if ($rows == 1) {
	if ($f['flag']==0)
	{
$_SESSION['login_user']=$username; // Initializing Session
header("location: Mess.php"); // Redirecting To Other Page
	}
	else
	{
		$error = "You Can Only Login Once!!";
	}
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>