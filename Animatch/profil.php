<?php
	include("koneksi.php");
	$nick = $_GET['nickname'];
	$query = "SELECT * FROM user WHERE nickname = '$nick'";
	$query2 = "SELECT SUM(score) FROM scores WHERE nickname='$nick'";
	$query3 = "SELECT COUNT(nickname) FROM scores WHERE nickname='$nick'";
	$result = mysqli_query($db, $query);
	$result2 = mysqli_query($db, $query2);
	$result3 = mysqli_query($db, $query3);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{
		font-size:0.725em;
		font-family:Arial, Helvetica, sans-serif;
		background: url(img/gambars/background_play.png) center no-repeat;
		background-size: 1366px;
		background-attachment: fixed;
	}
	</style>
</head>
<body>
<div id="profil" style="background: url(img/gambars/user.png) center no-repeat; height: 650px; background-size: 500px; color: #fbeccf">
	<center>
<?php
	$data = mysqli_fetch_array($result);
	echo "<img src='photos/".$data['foto']."' width='150px' height='150px' style='margin-top:190px; margin-bottom:73px;'>";
?>
	<div id="data" style="width: 330px;height: 70px;">
<?php
	echo "<h2 style='font-size: 15px; text-align: left'>Name : ".$data['nickname']."</h2>";
	echo "<h2 style='font-size: 15px; text-align: left'>Gender : ".$data['gender']."</h2>";
	$data = mysqli_fetch_array($result2);
	echo "<h2 style='font-size: 15px; margin-top: -58px; text-align: right'>Total Score : ".$data['SUM(score)']."</h2>";
	$data = mysqli_fetch_array($result3);
	echo "<h2 style='font-size: 15px; text-align: right'>Total Playing : ".$data['COUNT(nickname)']."</h2>";
?>
</div>
<div id="back" style="background: url(img/gambars/back.png) center no-repeat; width: 100px; height: 100px; background-size: 100px; margin-top: 40px;margin-left: 7px;" onClick="window.location='leaderboard.php'"></div>
</center>
</div>
</body>
</html>