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
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql1=mysql_query("select stu_name from login where stu_rollno='$user_check' OR stu_id='$user_check'", $connection);
$ses_sql2=mysql_query("select hostel from login where stu_rollno='$user_check' OR stu_id='$user_check'", $connection);

$row1 = mysql_fetch_assoc($ses_sql1);
$row2 = mysql_fetch_assoc($ses_sql2);
$login_session1 =$row1['stu_name'];
$login_session2 =$row2['hostel'];
if(!isset($login_session1)){
mysql_close($connection); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>