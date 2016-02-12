<?php
/*session_start();
if(isset($_SESSION['user']))
{
	header("location: play.php");
}
else
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("ph");
	
} */
?>
<!doctype HTML>
<html>
	<head>
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="../source/loader.css">
		<link rel="stylesheet" type="text/css" href="../source/dialog_blue.css">
		<script src="../source/loader.js"></script>
		<script src="../source/da.js"></script>
	</head>
	<body>
		<div class="background">
			<div id="bar">
				<div id="progress"></div>
			</div>
		</div>
		<div class="login_box">
			<form action="" method="post">
			<br>
			<br>
			<br>
			 &nbsp; &nbsp;<label>Username</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="username" type="text">
			<br>
			 &nbsp; &nbsp;<label>Password</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="password" type="password">
			 <br>
			 <br>
			 <center><input id="login" name="submit" type="submit" value="Login">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input id="login" name="register" type="submit" value="Register"></center>
			</form>
		</div>
	</body>
</html>
