<?php
error_reporting(E_ALL ^ ~E_WARNING);
include('sessiona.php');
include('logina.php');

if(!isset($_POST['resultp'])){
header("location: admin.php");
}

$date= $_POST['date'];
$mysql_hostname="localhost";
$mysql_user = "root";
   $mysql_password = "";
    $mysql_database = "feedback";
    $prefix = "";
$connection =mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
// Selecting Database
mysql_select_db("feedback", $connection);
$percentage;
$sum;
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
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>

<body>

<div class="app-cross">
  <form name="back" action="admin.php" method="post">
				<div class="submit"><input type="submit"  value="Go Back" ></div>
				<div class="clear"></div>
				</form>
</div>

		<table  class="table">
    <caption ><h3>Chanakya</h3> </caption>
	<thead>
<tr class="danger">

	  <th>S.No</th>
        <th>Questions</th>
        <th>Very Satisfied</th>
        <th>Satisfied</th>
		<th>Neutral</th>
        <th>Dissatisfied</th>
        <th>Worst</th>
      </tr>
    </thead>
	<tbody>
      <tr class="info">
	  <td>1</td>
        <td>Cleanliness of the mess premises</td>
<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td></tr>
<tr class="info">
<td>2</td>
        <td>Weather the  food prepared in hygienic conditions</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>3</td>
        <td>Food is served hot and fresh</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>4</td>
        <td>Taste and Flavour of the food</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>5</td>
        <td>Cleanliness of the utensils provided</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>6</td>
        <td>Quality of salad served</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>7</td>
        <td>Menu variety</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
        <td>8</td>
		<td>Breakfast  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">
<td>9</td>
        <td>Lunch  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">

	<td>10</td>
        <td>Evening-Snacks 
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
	
      <tr class="info">
	<td>11</td>	<td>Dinner  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chanakya where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
    </tbody>
  </table>
			<table  class="table">
    <caption ><h3>Chandragupt</h3> </caption>
	<thead>
<tr class="danger">

	  <th>S.No</th>
        <th>Questions</th>
        <th>Very Satisfied</th>
        <th>Satisfied</th>
		<th>Neutral</th>
        <th>Dissatisfied</th>
        <th>Worst</th>
      </tr>
    </thead>
	<tbody>
      <tr class="info">
	  <td>1</td>
        <td>Cleanliness of the mess premises</td>
<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td></tr>
<tr class="info">
<td>2</td>
        <td>Weather the  food prepared in hygienic conditions</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>3</td>
        <td>Food is served hot and fresh</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>4</td>
        <td>Taste and Flavour of the food</td>
		<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>5</td>
        <td>Cleanliness of the utensils provided</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>6</td>
        <td>Quality of salad served</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>7</td>
        <td>Menu variety</td>
				<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
        <td>8</td>
		<td>Breakfast  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">
<td>9</td>
        <td>Lunch  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">

	<td>10</td>
        <td>Evening-Snacks 
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
	
      <tr class="info">
	<td>11</td>	<td>Dinner  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_chandragupta where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
    </tbody>
  </table>

     					<table  class="table">
    <caption ><h3>Vrindavan</h3> </caption>
	<thead>
<tr class="danger">

	  <th>S.No</th>
        <th>Questions</th>
        <th>Very Satisfied</th>
        <th>Satisfied</th>
		<th>Neutral</th>
        <th>Dissatisfied</th>
        <th>Worst</th>
      </tr>
    </thead>
	<tbody>
      <tr class="info">
	  <td>1</td>
        <td>Cleanliness of the mess premises</td>
<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td></tr>
<tr class="info">
<td>2</td>
        <td>Weather the  food prepared in hygienic conditions</td>
		<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=2 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=1 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>3</td>
        <td>Food is served hot and fresh</td>
		<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=3 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
	  <td>4</td>
        <td>Taste and Flavour of the food</td>
		<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=4 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>5</td>
        <td>Cleanliness of the utensils provided</td>
				<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=5 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>6</td>
        <td>Quality of salad served</td>
				<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=6 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
	  <tr class="info">
	  <td>7</td>
        <td>Menu variety</td>
				<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=7 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
      <tr class="info">
        <td>8</td>
		<td>Breakfast  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=8 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">
<td>9</td>
        <td>Lunch  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=9 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
      <tr class="info">

	<td>10</td>
        <td>Evening-Snacks 
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=10 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
	</tr>
	
      <tr class="info">
	<td>11</td>	<td>Dinner  
	</td>
	<td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['vs']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['s']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['neutral']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['ds']/$sum)*100;
echo $percentage."%";
}
  ?></td>
  <td>
<?php
$sql2=mysql_query("select * from data_vrindavan where qno=11 and feedback_date='$date'", $connection);
while($row2 = mysql_fetch_assoc($sql2))
{
	$sum=$row2['vs']+$row2['s']+$row2['neutral']+$row2['ds']+$row2['worst'];
	$percentage=($row2['worst']/$sum)*100;
echo $percentage."%";
}
  ?></td>
      </tr>
    </tbody>
  </table>

</body>
</html>
