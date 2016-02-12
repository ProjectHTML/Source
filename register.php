<?php

?>
<!doctype HTML>
<html>
	<head>
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="../source/dialog_blue.css">
		<script src="../source/da.js"></script>
	</head>
	<body>
		<div class="background">
			<div id="bar">
				<div id="progress"></div>
			</div>
		</div>
		<div class="register_box">
			<form action="" method="post">
			<br>
			<br>
			<br>
			<div class="alignleft">
			 &nbsp; &nbsp;<label>Username</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="username" type="text">
			<br>
			 &nbsp; &nbsp;<label>E-Mail</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="mail" type="text">
			<br>
			 &nbsp; &nbsp;<label>Password</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="password" type="password">
			 <br>
			 &nbsp; &nbsp;<label>Confirm Passowrd</label>
			<br>
			 &nbsp; &nbsp;<input id="input" name="confirm" type="text">
			 <br>
			 <br>
			 <center><br><input id="register" name="submit" type="submit" value="Register"></center>
			 </div>
			 
			 <div class="alignleft">
				<label>
				  <input type="radio" name="skin_selection" value="skin1" />
				  <img src="../album/skins/skin1.png">
				</label>
				<label>
				  <input type="radio" name="skin_selection" value="skin2" />
				  <img src="../album/skins/skin2.png">
				</label><br>
				<label>
				  <input type="radio" name="skin_selection" value="skin3" />
				  <img src="../album/skins/skin3.png">
				</label>
				<label>
				  <input type="radio" name="skin_selection" value="skin4" />
				  <img src="../album/skins/skin4.png"><br>
				</label>
			 </div>
			</form>
		</div>
	</body>
</html>
