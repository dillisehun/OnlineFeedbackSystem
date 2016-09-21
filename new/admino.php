<?php
include('sessiona.php');
include('logina.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Schedule The Feedback</title>
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
#login-form{width:500px; background:#FFF; margin:0 auto; margin-top:70px; background:#f8f8f8; overflow:hidden; border-radius:10px}

/*sectiop*/
.section-out{width:700px; float:right; transition:all 600ms ease}
.section-out:after{content:''; clear:both; display:table}
.section-out section{width:350px; float:left}

.input{background:#fff; transition:all 800ms; width:247px; border-radius:3px 0 0 3px; font-family: 'Ropa Sans', sans-serif; border:solid 1px #ccc; border-right:none; outline:none; color:#999; height:40px; line-height:40px; display:inline-block; padding-left:10px; font-size:16px}
.input,.login span.icon{vertical-align:top}
.login span.icon{width:50px; transition:all 800ms; text-align:center; color:#999; height:40px; border-radius:0 3px 3px 0; background:#e8e8e8; height:40px; line-height:40px; display:inline-block; border:solid 1px #ccc; border-left:none; font-size:16px}
.input:focus:valid{border-color:green}
.input:focus:valid+.icon{border-color:green}
#check,#check1{top:1px; position:relative}

</style>
<!--webstyle-->
   
   </head>
  <body>
  <div>
  <div class="app-cross">
<div id="login-form">

    <form name="byeadmin"action="logouta.php" method="post">
	<div class="submit"><input type="submit" onclick="myFunction()" value="Logout?" ></div>
			</form>
			<form name="admincan" action="Reset_flag.php" method="post">
	<div class="submit"><input type="submit" onclick="myFunction()" value="Reset Flags?" ></div>
			</form>
 </div>  </div></div>
  </body>
</html>
