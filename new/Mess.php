<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 <?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Feedback System Of Krishna Engg. College (For Hostel)</title>
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" ./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--webstyle--><style>
body{font-family: 'Ropa Sans', sans-serif; color:#666; font-size:14px; color:#333}
li,ul,body,input{margin:0; padding:0; list-style:none}
#login-form{width:350px; background:#FFF; margin:0 auto; margin-top:70px; background:#f8f8f8; overflow:hidden; border-radius:7px}
.form-header{display:table; clear:both}
.form-header label{display:block; cursor:pointer; z-index:999}
.form-header li{margin:0; line-height:60px; width:175px; text-align:center; background:#eee; font-size:18px; float:left; transition:all 600ms ease}
.form-headerm label{display:block; }
.form-headerm li{line-height:60px; line-width:350px;  text-align:center; background:black; font-size:18px;  transition:all 600ms ease}

/*sectiop*/
.section-out{width:700px; float:left; transition:all 600ms ease}
.section-out:after{content:''; clear:both; display:table}
.section-out section{width:350px; float:left}

.ul-list{clear:both; display:table; width:100%}
.ul-list:after{content:''; clear:both; display:table}
.ul-list li{ margin:0 auto; margin-bottom:12px}
.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
.input,.login span.icon{vertical-align:top}
.login span.icon{width:50px; transition:all 800ms; text-align:center; color:#999; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}

.hide{display:none}
</style>
<script>
function submi()
{
var r=confirm("Are you sure you want to Submit?");
  if(r == true){
   return true;
  }else{
   return false;
  }}
  </script>
<!--webstyle-->
</head>
<body>
	<h1>&nbsp &nbsp &nbsp Krishna Engineering College<br/><font size="20px" color="#464646">&nbsp &nbsp Hostel Feedback System</font><br/>
	&nbsp &nbsp <img src="images/cross.jpg" width="150px" height="150px"/></h1>
	

<ul class="form-headerm">
<div>

<li><label ><font color="#fff">  &nbsp Feedback<br/> <b id="welcome">Welcome : <i><?php echo $login_session1; ?></i></b><br/><?php echo $login_session2; ?><br/>
<b id="logout"><a href="logout.php">Log Out</a></b></font></label >
</li>
</div>

			<form background="#fff" action="login_flag.php" method="post" >
				<table  class="table"><caption><h3>Rate the following questions according To your satisfaction Level</h3>
		</caption>
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
      <tr class="warning">
	  <td>1</td>
        <td>Cleanliness of the mess premises</td>
		        <td><input type="radio" name="q1"value="5" required/></td>
		<td><input type="radio" name="q1"value="4"/></td>
		<td><input type="radio" name="q1"value="3"/></td>
		<td><input type="radio" name="q1"value="2"/></td>
		<td><input type="radio" name="q1"value="1"/></td>
</tr>
<tr class="warning">
<td>2</td>
        <td>Weather the  food prepared in hygienic conditions</td>
        <td><input type="radio" name="q2"value="5" required/></td>
		<td><input type="radio" name="q2"value="4"/></td>
		<td><input type="radio" name="q2"value="3"/></td>
		<td><input type="radio" name="q2"value="2"/></td>
		<td><input type="radio" name="q2"value="1"/></td>
      </tr>
      <tr class="warning">
	  <td>3</td>
        <td>Food is served hot and fresh</td>
        <td><input type="radio" name="q3"value="5" required/></td>
		<td><input type="radio" name="q3"value="4"/></td>
		<td><input type="radio" name="q3"value="3"/></td>
		<td><input type="radio" name="q3"value="2"/></td>
		<td><input type="radio" name="q3"value="1"/></td>
      </tr>
      <tr class="warning">
	  <td>4</td>
        <td>Taste and Flavour of the food</td>
        <td><input type="radio" name="q4"value="5" required/></td>
		<td><input type="radio" name="q4"value="4"/></td>
		<td><input type="radio" name="q4"value="3"/></td>
		<td><input type="radio" name="q4"value="2"/></td>
		<td><input type="radio" name="q4"value="1"/></td>
      </tr>
	  <tr class="warning">
	  <td>5</td>
        <td>Cleanliness of the utensils provided</td>
        <td><input type="radio" name="q5"value="5" required/></td>
		<td><input type="radio" name="q5"value="4"/></td>
		<td><input type="radio" name="q5"value="3"/></td>
		<td><input type="radio" name="q5"value="2"/></td>
		<td><input type="radio" name="q5"value="1"/></td>
      </tr>
	  <tr class="warning">
	  <td>6</td>
        <td>Quality of salad served</td>
        <td><input type="radio" name="q6"value="5" required /></td>
		<td><input type="radio" name="q6"value="4"/></td>
		<td><input type="radio" name="q6"value="3"/></td>
		<td><input type="radio" name="q6"value="2"/></td>
		<td><input type="radio" name="q6"value="1"/></td>
      
	  </tr>
	  <tr class="warning">
	  <td>7</td>
        <td>Menu variety</td>
        <td><input type="radio" name="q7"value="5" required /></td>
		<td><input type="radio" name="q7"value="4"/></td>
		<td><input type="radio" name="q7"value="3"/></td>
		<td><input type="radio" name="q7"value="2"/></td>
		<td><input type="radio" name="q7"value="1"/></td>
      </tr>
	<tr class="warning">
	  <td>8</td>
        <td>If any suggestion specify Here(Optional):</td>
        <td > <textarea class="form-control" rows="5"  name="comment"  id="comment" placeholder="Suggestions"></textarea></td>
		<td></td>
<td></td>
<td></td>
<td></td>
      </tr>
	  </table>
	  <table class="table">
<caption> <h3>Rank This From 5  to 1 where 5 is Very Satisfied and 1 is worst</h3></caption>	  </tr><tr class="danger">
	  <td>Breakfast</td>
	    <td>Lunch</td>
		<td>Evening-Snacks</td>
		<td >Dinner</td>
		</tr>
<tr class="info"><div class="submit"><td>
	
	<select name="q8"  class="form-control"  required>
<option value="">None</option>
	<option value="5" >5</option>
	<option value="4" >4</option>
	<option value="3" >3</option>
	<option value="2" >2</option>
	<option value="1" >1</option>
	</select></td>

		        <td>	
	<select name="q9" class="form-control"   required>
<option value="">None</option>
	<option value="5" >5</option>
	<option value="4" >4</option>
	<option value="3" >3</option>
	<option value="2" >2</option>
	<option value="1" >1</option>
	</select></td>
<td>	

	<select name="q10" class="form-control"   required>
<option value="">None</option>

	<option value="5" >5</option>
	<option value="4" >4</option>
	<option value="3" >3</option>
	<option value="2" >2</option>
	<option value="1" >1</option>
	</select></td>
	<td >
	<select name="q11" class="form-control"   required>
<option value="">None</option>

	<option value="5" >5</option>
	<option value="4" >4</option>
	<option value="3" >3</option>
	<option value="2" >2</option>
	<option value="1" >1</option>
	</select></td>
	
</tr>
	  
    </tbody>
	</table>
<div class="app-cross">
  
				<div class="submit"><input type="submit" onclick="return submi();" value="Submit" ></div>
				<div class="clear"></div>
</div>			
			</form>
</ul>
		</div>




		<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | Developed by &nbsp; Satish Padnani</p>
		</div>
	<!--//end-copyright-->

	</body>
</html>