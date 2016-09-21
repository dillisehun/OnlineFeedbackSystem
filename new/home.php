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
<link href="css/stylem.css" rel='stylesheet' type='text/css' />
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
.form-headerm{display:table; clear:both}
.form-headerm label{display:block; cursor:pointer; z-index:900}
.form-headerm li{margin:0; line-height:60px; width:500px; text-align:left; background:black; font-size:25px;  transition:all 600ms ease}

/*sectiop*/
.section-out{width:700px; float:left; transition:all 600ms ease}
.section-out:after{content:''; clear:both; display:table}
.section-out section{width:350px; float:left}

.login{padding:20px}
.ul-list{clear:both; display:table; width:100%}
.ul-list:after{content:''; clear:both; display:table}
.ul-list li{ margin:0 auto; margin-bottom:12px}
.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
.input,.login span.icon{vertical-align:top}
.login span.icon{width:50px; transition:all 800ms; text-align:center; color:#999; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}
.input:focus:invalid{border-color:red}
.input:focus:invalid+.icon{border-color:red}
.input:focus:valid{border-color:green}
.input:focus:valid+.icon{border-color:green}
#check,#check1{top:1px; position:relative}

.hide{display:none}

/*swich form*/
#signup:checked~.section-out{margin-left:-350px}
#login:checked~.section-out{margin-left:0px}
#login:checked~div .form-header li:nth-child(1),#signup:checked~div .form-header li:nth-child(2){background:#e8e8e8}
</style>
<!--webstyle-->
</head>
<body>
	<h1>Feedback System (for Hostellers Only)</h1>

	<div class="app-cross">
<div id="login-form">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br/>
<b id="logout"><a href="logout.php">Log Out</a></b>
<div>
<ul class="form-headerm">

<li><label ><font color="#fff">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp One By One:</font></label >
</li></ul>
	<form action="Mess.php" method="post">
<input type="submit" value="MESS" name="Mess"/>
</form>
<form action="HostelO.php" method="post">
<input type="submit" value="Other Hostel Facilities" name="ohf"/>
</form>
	</div>
		</div>
		</div>




		<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | Developed by &nbsp; Satish Padnani</p>
		</div>
	<!--//end-copyright-->

	</body>
</html>