<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if ($_SESSION['username'] == is_null()) {
		?>
		<style type="text/css">
			body{
				background: url(img/gambars/hasil.png) center no-repeat;
				background-size: 1366px;
				background-position: 0px -50px ;
			}
		</style>
	</head>
	<body style="margin-top: 300px;">
		<center><h1>Silahkan Login Terlebih Dahulu<br><a href='login.php' style='text-decoration: none'> Disini</a></h1></center>
		<?php
	} else {
		?>
		<style type="text/css">
			body{
				font-size:0.725em;
				font-family:Arial, Helvetica, sans-serif;
				background: url(img/gambars/hasil.png) center no-repeat;
				background-size: 1366px;
				background-attachment: fixed;
			}
		</style>
	</head>
	<body><center>
		<img src="img/gambars/youlose.png" style=" width: 150px; height: 150px;margin-top: 200px">
		<h1><font color="#CC0000">Bad</font> Memory? No, I Think You Can Do Better<br /><a href="index.html" style="text-decoration: none">Play again?</a></h1>
		<h1>Score : <?php echo $_COOKIE['score']; ?></h1>
	</center>
	<?php
}
?>
</body>
</html>