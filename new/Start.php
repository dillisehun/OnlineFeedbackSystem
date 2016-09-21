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
$date=date("d/m/y");
// Selecting Database
$db = mysql_select_db("feedback", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("update login set flag=0", $connection);
$query2=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',1)", $connection);
$query3= mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',2)", $connection);
$query4=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',3)", $connection);
$query5=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',4)", $connection);
$query6=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',5)", $connection);
$query7=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',6)", $connection);
$query8=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',7)", $connection);
$query9=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',8)", $connection);
$query10=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',9)", $connection);
$query11=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',10)", $connection);
$query12=mysql_query("insert into data_chanakya(feedback_date,qno) values('$date',11)", $connection);

$query13=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',1)", $connection);
$query14= mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',2)", $connection);
$query15=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',3)", $connection);
$query16=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',4)", $connection);
$query17=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',5)", $connection);
$query18=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',6)", $connection);
$query19=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',7)", $connection);
$query20=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',8)", $connection);
$query21=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',9)", $connection);
$query22=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',10)", $connection);
$query23=mysql_query("insert into data_chandragupta(feedback_date,qno) values('$date',11)", $connection);

$query24=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',1)", $connection);
$query25= mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',2)", $connection);
$query26=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',3)", $connection);
$query27=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',4)", $connection);
$query28=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',5)", $connection);
$query29=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',6)", $connection);
$query30=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',7)", $connection);
$query31=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',8)", $connection);
$query32=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',9)", $connection);
$query33=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',10)", $connection);
$query34=mysql_query("insert into data_vrindavan(feedback_date,qno) values('$date',11)", $connection);

header("Location: admin.php"); // Redirecting To Home Page
mysql_close($connection); // Closing Connection
?>