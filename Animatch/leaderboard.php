<?php
	include("koneksi.php");
	$medium = "SELECT * FROM scores WHERE LEVEL='Medium' ORDER BY score desc LIMIT 0, 10";
	$result2 = mysqli_query($db, $medium);
	$easy = "SELECT * FROM scores WHERE LEVEL='Easy' ORDER BY score desc LIMIT 0, 10";
	$result = mysqli_query($db, $easy);
	$hard = "SELECT * FROM scores WHERE LEVEL='Hard' ORDER BY score desc LIMIT 0, 10";
	$result3 = mysqli_query($db, $hard);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leaderboard Game Kelompok 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style type="text/css">
	body{
		font-family:Arial, Helvetica, sans-serif;
		background: url(img/gambars/leaderboard.png) center no-repeat;
		background-size: 1400px 700px;
		background-attachment: fixed;
	}
	</style>
</head>
<body style="margin-top: 180px">
	<center>
<form action="leaderboard.php" method="GET" style="font-size: 20px; color: white;">
	<input type="submit" name="pilih" value="Easy" style="height: 30px; width: 100px;" />
	<input type="submit" name="pilih" value="Medium" style="height: 30px; width: 100px;" /> 
	<input type="submit" name="pilih" value="Hard" style="height: 30px; width: 100px;" /><br>
</form>
<br>
<?php
if (isset($_GET['pilih'])){
	if ($_GET['pilih'] == "Easy") {
?>
<div id="kotak" style=" width: 450px;">
	<table style="width: 90%;margin-left: -3px;">
		<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
			<?php
				$i = 1;
				while ($data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td align='center'>$i</td>";
					echo "<td><a href='profil.php?nickname=".$data['nickname']."' style='color:black'>".$data['nickname']."</a></td>";
					echo "<td align='center'>".$data['score']."</td>";
					echo "<td align='center'>".$data['timer']."</td>";
					echo "<td align='center'>".$data['level']."</td>";
					echo "</tr>";
					$i++;
					}
				?>
	</table>
</div>
<?php
	}
	if ($_GET['pilih'] == "Medium") {
?>
<div id="kotak" style=" width: 450px;">
	<table style="width: 90%;margin-left: -3px;">
		<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
			<?php
				$i = 1;
				while ($data = mysqli_fetch_array($result2)) {
					echo "<tr>";
					echo "<td align='center'>$i</td>";
					echo "<td><a href='profil.php?nickname=".$data['nickname']."' style='color:black'>".$data['nickname']."</a></td>";
					echo "<td align='center'>".$data['score']."</td>";
					echo "<td align='center'>".$data['timer']."</td>";
					echo "<td align='center'>".$data['level']."</td>";
					echo "</tr>";
					$i++;
					}
				?>
	</table>
</div>
<?php
	}
	if ($_GET['pilih'] == "Hard") {
?>
<div id="kotak" style=" width: 450px;">
	<table style="width: 90%;margin-left: -3px;">
		<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
			<?php
				$i = 1;
				while ($data = mysqli_fetch_array($result3)) {
					echo "<tr>";
					echo "<td align='center'>$i</td>";
					echo "<td><a href='profil.php?nickname=".$data['nickname']."' style='color:black'>".$data['nickname']."</a></td>";
					echo "<td align='center'>".$data['score']."</td>";
					echo "<td align='center'>".$data['timer']."</td>";
					echo "<td align='center'>".$data['level']."</td>";
					echo "</tr>";
					$i++;
					}
				?>
	</table>
</div>
<?php
	}
}
?>
	<br>
	<div id="back" style="background: url(img/gambars/back.png) center no-repeat; width: 100px; height: 100px; background-size: 100px; margin-top: -20px;" onClick="window.location='index.html'"></div></center>
</body>
</html>