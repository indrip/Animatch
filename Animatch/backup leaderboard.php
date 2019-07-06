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
	<link href="jquery-ui.css" rel="stylesheet">
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.js"></script>
</head>
<body style="margin-top: 200px">
	<center><div id="tabs" style="width: 38%">
	  <ul>
	    <li style="margin-left: 155px;"><a href="#tabs-1">Easy</a></li>
	    <li><a href="#tabs-2">Medium</a></li>
	    <li><a href="#tabs-3">Hard</a></li>
	  </ul>
  <div id="tabs-1">
    <div id="kotak" style=" width: 450px;">
		<table style="width: 90%;margin-left: -3px;">
			<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
				<?php
					$i = 1;
					while ($data = mysqli_fetch_array($result)) {
						echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td><a href='profil.php?nickname=".$data['nickname']."'>".$data['nickname']."</a></td>";
						echo "<td align='center'>".$data['score']."</td>";
						echo "<td align='center'>".$data['timer']."</td>";
						echo "<td align='center'>".$data['level']."</td>";
						echo "</tr>";
						$i++;
						}
					?>
		</table>
	</div>
  </div>
  <div id="tabs-2">
    <div id="kotak" style=" width: 450px;">
		<table style="width: 90%;margin-left: -3px;">
			<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
				<?php
					$i = 1;
					while ($data = mysqli_fetch_array($result2)) {
						echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td><a href='profil.php?nickname=".$data['nickname']."'>".$data['nickname']."</a></td>";
						echo "<td align='center'>".$data['score']."</td>";
						echo "<td align='center'>".$data['timer']."</td>";
						echo "<td align='center'>".$data['level']."</td>";
						echo "</tr>";
						$i++;
					}
				?>
		</table>
	</div>
  </div>
  <div id="tabs-3">
    <div id="kotak" style=" width: 450px;">
		<table style="width: 90%;margin-left: -3px;">
			<tr><th style="width:20px">No</th><th style="width:100px">Nickname</th><th style="width:30px">Score</th><th style="width:30px">Duration</th><th style="width:47px">Level</th></tr>
				<?php
					$i = 1;
					while ($data = mysqli_fetch_array($result3)) {
						echo "<tr>";
						echo "<td align='center'>$i</td>";
						echo "<td><a href='profil.php?nickname=".$data['nickname']."'>".$data['nickname']."</a></td>";
						echo "<td align='center'>".$data['score']."</td>";
						echo "<td align='center'>".$data['timer']."</td>";
						echo "<td align='center'>".$data['level']."</td>";
						echo "</tr>";
						$i++;
					}
				?>
		</table>
	</div>
  </div>
</div>
	<br>
	<div id="back" style="background: url(img/gambars/back.png) center no-repeat; width: 100px; height: 100px; background-size: 100px; margin-top: -20px;" onClick="window.location='index.html'"></div></center>
	<script>
	  $( function() {
	    $( "#tabs" ).tabs();
	  } );
  </script>
</body>
</html>