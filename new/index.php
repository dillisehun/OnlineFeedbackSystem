<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user1'])){
header("location: admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Feedback System Of Krishna Engg. College (For Hostel)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel='stylesheet'>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--webstyle--><style>
body{font-family: 'Ropa Sans', sans-serif; color:#666; font-size:14px; color:#333}
li,ul,body,input{ list-style:none}
#login-form{width:350px; background:#FFF; margin-top:40px; background:#f8f8f8; overflow:hidden; border-radius:7px}
.form-header{display:table; clear:both}
.form-header label{display:block; cursor:pointer; z-index:999}
.form-header li{ line-height:60px; width:175px; text-align:center; background:#eee; font-size:18px; float:left; transition:all 600ms ease}
.form-headerm label{display:block; }
.form-headerm li{line-height:60px; line-width:350px;  background:black; font-size:18px;  transition:all 600ms ease}

/*sectiop*/
.section-out{width:700px; float:left; transition:all 600ms ease}
.section-out:after{content:''; clear:both; display:table}
.section-out section{width:350px; float:left}

.login{padding:20px}
.ul-list{clear:both; display:table; width:100%}
.ul-list:after{content:''; clear:both; display:table}
.ul-list li{ margin-bottom:20px}
.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
.input,.login span.icon{vertical-align:top}
.login span.icon{width:50px; transition:all 800ms; text-align:center; color:#999; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}

.hide{display:none}

/*swich form*/
#signup:checked~.section-out{margin-left:-370px}
#login:checked~.section-out{margin-left:-30px}
#login:checked~div .form-header li:nth-child(1),#signup:checked~div .form-header li:nth-child(2){background:#e8e8e8}
</style>
<!--webstyle-->
</head align="center">
<body>
	<h1>Feedback System<br/>(for Hostellers)</h1>

	<div class="app-cross" align="center" >
	
<div id="login-form" >

<input type="radio" checked id="login" name="switch" class="hide">
<input type="radio" id="signup" name="switch" class="hide">

<div>
<ul class="form-headerm" >

<li><label><font color="#fff"> Log In As:</font></label>
</li></ul>
<ul class="form-header" >

<li><label for="login"><i class="fa fa-lock"></i> Student</label >
</li>
<li><label for="signup"><i class="fa fa-credit-card"></i> Dean/Director </label></li>
</ul>
</div>
<div class="section-out">

<section class="login-section">
<div class="login">

			<form name="loginforms" action="" method="post">
 
  
   		<input type="text" id="name"  name="username"   placeholder="Roll Number/Student Id" required >

			<input  id="password" placeholder="********" type="password"  name="password" required >
				<br/><br/>
				<div class="submit"><input type="submit" name="submit" onclick="myFunction()" value="Go For Feedback " ></div>
	<span style="color:Red"><?php echo $error; ?></span>
	<span style="color:Red"><?php  echo $error2; ?></span>				
			</form>
			<!--
			<form>
	<div class="submitt"><input type="submit" onclick="myFunction()" value="Generate Password?" ></div>
			</form>-->

</div>
</section>

			<section class="signup-section">
<div class="login">
			<form name="loginforma" action="admin.php" method="post">
				<input type="text" id="username" name="username"  placeholder="Admin Username" required  >
				<input type="password"  id="password" name="password" placeholder="*********" required>
				<div class="submit"><input type="submit" name="submit" onclick="myFunction()" value="Login" ></div>
	
		<!--<div class="submitt"><input type="submit" onclick="myFunction()" value="Generate Password?" ></div>
			-->
			</form>
</div>

</section>
			
		</div>
		</div>
		</div>




		<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015  All rights  Reserved | Developed by &nbsp; Satish Padnani</p>
		</div>
	<!--//end-copyright-->
</center>
	</body>
</html>