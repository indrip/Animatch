<?php
	session_start();
	$my_array = array("kartu1","kartu2","kartu3","kartu4","kartu5","kartu6","kartu7","kartu8");
	shuffle($my_array);
	$gambar1 = $my_array[0];
	$gambar2 = $my_array[1];
	$gambar3 = $my_array[2];
	$gambar4 = $my_array[3];
	$gambar5 = $my_array[4];
	$gambar6 = $my_array[5];
	$gambar7 = $my_array[6];
	$gambar8 = $my_array[7];
	if(isset($_POST['play'])){
			$_SESSION['level'] = $_POST['level'];
			header("Location: game.php");	
		}
?>
<html>
<head>
<title>Mini Card Game</title>
	
<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if ($_SESSION['username'] == is_null()) {
?>
		<body style="background: url(img/gambars/hasil.png) center no-repeat; background-size: 1366px;background-attachment: fixed;margin-top: 200px">
<?php
		echo "<center><br><br><br><br><h1>Silahkan Login Terlebih Dahulu<br><a href='login.php' style='text-decoration: none'> Disini</a></h1></center>";
	} else {
?>
		<link rel="stylesheet" type="text/css" href="styles.css" />
	<style type="text/css">
	body{
		font-size:0.7em;
		font-family:Arial, Helvetica, sans-serif;
		background: url(img/gambars/blur.jpeg) center no-repeat;
		background-size: 1366px;
		background-position: 0px -50px ;
	}
	</style>
	<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="jquery.flip.min.js"></script>
<?php
	if ($_SESSION['level'] == "Easy") {
		include 'easy.php';
	}
	else if ($_SESSION['level'] == "Medium") {
		include 'medium.php';
	}
	else if ($_SESSION['level'] == "Hard") {
		include 'hard.php';
	}
}
?>
	
</body>
</html>