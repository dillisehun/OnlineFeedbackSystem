 <?php
include('session.php');
?>
<?php
error_reporting(E_ALL ^ ~E_WARNING);
session_start(); // Starting Session
$ques1=$_POST['q1'];
$ques2=$_POST['q2'];
$ques3=$_POST['q3'];
$ques4=$_POST['q4'];
$ques5=$_POST['q5'];
$ques6=$_POST['q6'];
$ques7=$_POST['q7'];
$ques8=$_POST['q8'];
$ques9=$_POST['q9'];
$ques10=$_POST['q10'];
$ques11=$_POST['q11'];
$comment=$_POST['comment'];
$table;
if($login_session2=="chanakya")
	$table="data_chanakya";
else if($login_session2=="chandragupta")
	$table="data_chandragupta";
else
	$table="data_vrindavan";

// Define $username and $password
$username=$_SESSION['login_user'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
 $mysql_hostname = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_database = "feedback";
    $prefix = "";
    $connection = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
   $ses_sql2=mysql_query("select hostel from login where stu_rollno='$user_check' OR stu_id='$user_check'", $connection);

$row2 = mysql_fetch_assoc($ses_sql2);
$login_session2 =$row2['hostel'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$date=date("d/m/y");
// Selecting Database
$db = mysql_select_db("feedback", $connection);
if(isset($_POST['q1']))
{
	if($ques1==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=1 and feedback_date='$date'", $connection);
	}
	else if($ques1==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=1 and feedback_date='$date'", $connection);
	}
	else if($ques1==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=1 and feedback_date='$date'", $connection);
	}
	else if($ques1==4)
	{
		mysql_query("update $table set s=s+1 where qno=1 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=1 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q2']))
{
	if($ques2==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=2 and feedback_date='$date'", $connection);
	}
	else if($ques2==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=2 and feedback_date='$date'", $connection);
	}
	else if($ques2==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=2 and feedback_date='$date'", $connection);
	}
	else if($ques2==4)
	{
		mysql_query("update $table set s=s+1 where qno=2 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=2 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q3']))
{
	if($ques3==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=3 and feedback_date='$date'", $connection);
	}
	else if($ques3==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=3 and feedback_date='$date'", $connection);
	}
	else if($ques3==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=3 and feedback_date='$date'", $connection);
	}
	else if($ques3==4)
	{
		mysql_query("update $table set s=s+1 where qno=3 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=3 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q4']))
{
	if($ques4==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=4 and feedback_date='$date'", $connection);
	}
	else if($ques4==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=4 and feedback_date='$date'", $connection);
	}
	else if($ques4==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=4 and feedback_date='$date'", $connection);
	}
	else if($ques4==4)
	{
		mysql_query("update $table set s=s+1 where qno=4 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=4 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q5']))
{
	if($ques5==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=5 and feedback_date='$date'", $connection);
	}
	else if($ques5==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=5 and feedback_date='$date'", $connection);
	}
	else if($ques5==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=5 and feedback_date='$date'", $connection);
	}
	else if($ques5==4)
	{
		mysql_query("update $table set s=s+1 where qno=5 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=5 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q6']))
{
	if($ques6==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=6 and feedback_date='$date'", $connection);
	}
	else if($ques6==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=6 and feedback_date='$date'", $connection);
	}
	else if($ques6==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=6 and feedback_date='$date'", $connection);
	}
	else if($ques6==4)
	{
		mysql_query("update $table set s=s+1 where qno=6 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=6 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q7']))
{
	if($ques7==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=7 and feedback_date='$date'", $connection);
	}
	else if($ques7==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=7 and feedback_date='$date'", $connection);
	}
	else if($ques7==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=7 and feedback_date='$date'", $connection);
	}
	else if($ques7==4)
	{
		mysql_query("update $table set s=s+1 where qno=7 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=7 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q8']))
{
	if($ques2==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=8 and feedback_date='$date'", $connection);
	}
	else if($ques2==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=8 and feedback_date='$date'", $connection);
	}
	else if($ques2==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=8 and feedback_date='$date'", $connection);
	}
	else if($ques2==4)
	{
		mysql_query("update $table set s=s+1 where qno=8 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=8 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q9']))
{
	if($ques2==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=9 and feedback_date='$date'", $connection);
	}
	else if($ques2==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=9 and feedback_date='$date'", $connection);
	}
	else if($ques2==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=9 and feedback_date='$date'", $connection);
	}
	else if($ques2==4)
	{
		mysql_query("update $table set s=s+1 where qno=9 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=9 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q10']))
{
	if($ques2==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=10 and feedback_date='$date'", $connection);
	}
	else if($ques2==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=10 and feedback_date='$date'", $connection);
	}
	else if($ques2==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=10 and feedback_date='$date'", $connection);
	}
	else if($ques2==4)
	{
		mysql_query("update $table set s=s+1 where qno=10 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=10 and feedback_date='$date'", $connection);
	}
}
if(isset($_POST['q11']))
{
	if($ques2==1)
	{
		mysql_query("update $table set worst=worst+1 where qno=11 and feedback_date='$date'", $connection);
	}
	else if($ques2==2)
	{
		mysql_query("update $table set ds=ds+1 where qno=11 and feedback_date='$date'", $connection);
	}
	else if($ques2==3)
	{
		mysql_query("update $table set neutral=neutral+1 where qno=11 and feedback_date='$date'", $connection);
	}
	else if($ques2==4)
	{
		mysql_query("update $table set s=s+1 where qno=11 and feedback_date='$date'", $connection);
	}
	else
	{
		mysql_query("update $table set vs=vs+1 where qno=11 and feedback_date='$date'", $connection);
	}
}

if(isset($_POST['comment']))
{ 
	mysql_query("insert into feedback_comm values('$date','$comment','$login_session2')");
	}
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("update login set flag=1 where stu_rollno='$username' OR stu_id='$username'", $connection);
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
mysql_close($connection); // Closing Connection
?>