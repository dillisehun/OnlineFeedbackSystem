<?php
error_reporting(E_ALL ^ ~E_WARNING);
include('sessiona.php');
include('logina.php');
$mysql_hostname="localhost";
$mysql_user = "root";
   $mysql_password = "";
    $mysql_database = "feedback";
    $prefix = "";
$connection =mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
// Selecting Database
mysql_select_db("feedback", $connection);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/site.css" rel="stylesheet" type="text/css" />
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel Demographics</title>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>
<script src="js/jquery.js"></script>

    <script src="js/example.js"></script>

    <link rel="stylesheet" href="css/material-charts.css">
    <script src="js/material-charts.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" ./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script>
function pops()
{var r=confirm("Are you sure you want to Start Feedback?");
  if(r == true){
   return true;
  }else{
   return false;
  }}
</script>
<script>
function pope()
{
var r=confirm("Are you sure you want to End Feedback?");
  if(r == true){
   return true;
  }else{
   return false;
  }}
</script>
<script>function logo()
{
 var r=confirm("Are you sure you want to Logout?");
  if(r == true){
   return true;
  }else{
   return false;
  }
}</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>

<body>
  <div class="app-cross">
 
 
 
 <!--<div class="subsection-title">Analyzed Data</div>
                        <div id="bar-chart-example"></div>
     -->       	
  <div id="login-form">
<form name="byeadmin" action="logouta.php" method="post">
	<div class="submit"><input type="submit" onclick=" return logo();" value="Logout?" ></div>
			</form>
			<form name="admincan" action="Start.php" method="post">
	<div class="submit"><input type="submit" onclick="return pops();" value="Start Feedback" ></div>
			</form>
					<form name="scheduler" action="Stop.php" method="post">
	<div class="submit"><input type="submit" onclick="return pope();" value="Stop Feedback" ></div>
			</form>
			
	</div></div>
<div class="app-cross">
 
	<div>
	
	<form align="center"  action="resultp.php" method="post">
	<div class="submit">

	<select name="date" class="form-control"   required>
	<option value="" >Choose Date</option>
<?php
$sql4=mysql_query("select DISTINCT feedback_date from data_chanakya", $connection);
while($row4 = mysql_fetch_assoc($sql4))
{$var = $row4['feedback_date'];
echo "<option value=".$var.">".$var."</option> ";

}

?>
 </select>
	<input type="submit"  name="resultp" value="See Results" ></div>

	</form>
	</div>
	</div>
			
<h1 >Suggestions/Comments.</h1>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Chanakya</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
<?php
$sql1=mysql_query("select comment from feedback_comm where hostel='chanakya'", $connection);
while($row1 = mysql_fetch_assoc($sql1))
{
echo "<li class=\"news-item\">".$row1['comment']."</li> ";
}
?>

</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Chandragupta</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
<?php
$sql3=mysql_query("select comment from feedback_comm where hostel='chandragupta'", $connection);
while($row3 = mysql_fetch_assoc($sql3))
{
echo "<li class=\"news-item\">".$row3['comment']."</li> ";
}
?>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>Vrindavan</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
<?php
$sql2=mysql_query("select comment from feedback_comm where hostel='vrindavan'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
echo "<li class=\"news-item\">".$row2['comment']."</li> ";
}
mysql_close($connection);
?>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
</body>
</html>