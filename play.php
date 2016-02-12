<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location: index.php");
}
mysql_connect("localhost", "root", "");
	mysql_select_db("ph");
?>
<!doctype HTML>
<html>
	<head>
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="../source/dialog_blue.css">
		<script src="../source/loader.js"></script>
		<script src="../source/da.js"></script>
	</head>
	<body>
		<div class="motd_box">
			<br>
			<br>
			<br>
			<center><?php $result = mysql_query("SELECT motd FROM settings"); $row = mysql_fetch_row($result); echo $row[0]; ?></center>
			 <center><button id="motd_button" type="button" onclick="$('.motd_box').hide();">Okay</button></center>
		</div>
	</body>
</html>
