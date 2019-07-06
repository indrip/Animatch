<?php
	session_start();
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	include("koneksi.php");
	$query = "SELECT * FROM user WHERE username='".$_SESSION['username']."'";
	$result = mysqli_query($db, $query);
?>
<html>
<head>
	<title>Welcome</title>
</head>
<body style="background: url(img/gambars/hasil.png) center no-repeat; background-size: 1366px;background-attachment: fixed;margin-top: 200px">
<?php
if ($_SESSION['username'] == is_null()) {
		echo "<center><br><br><br><br><h1>Silahkan Login Terlebih Dahulu<br><a href='login.php' style='text-decoration: none'> Disini</a></h1></center>";
	} else {
if ($data = mysqli_fetch_array($result)) {	
		echo "<center>";
		echo "<img src='photos/".$data['foto']."' width='100px' height='100px'><br><br><b>";
		echo $data['nickname']."</center></b><br>";
		echo "<center><form method='post' action='game.php'>";
		echo "<table>";
		echo "<tr>";
	    echo "<td>Level : ";  
	    echo "<select name='level'>";
	    echo "<option value='Easy'>Easy</option>";
	    echo "<option value='Medium'>Medium</option>";
	    echo "<option value='Hard'>Hard</option>";
	    echo "</select>";
	    echo "</td></tr>";
		echo "</table>";
		echo "<input type='submit' name='play' value='' style='background: url(img/gambars/start.png) center no-repeat; height: 46px; width: 100px; background-size: 95px; border: none; margin-top: 20px; margin-left: 110px;'>";
		echo "</form></center>";
		$_SESSION['nickname'] = $data['nickname'];
		//echo "<center><p style='background: #0e0e0e; color: white; padding: 20px; border-radius: 10px; width: 500px'>Rules :</p>
		//		<p align='left' style='background: #0e0e0e; color: white; padding: 20px; border-radius: 10px; width: 500px; margin-top: -30px; line-height: 30px;'>1. Disini Kami Menyediakan Sejumlah Kartu<br>
		//		2. Silahkan Anda (".$data['nickname'].") Untuk Menyelesaikan Game Ini Dengan<br>&nbsp&nbsp&nbsp&nbspMenjodohkan 2 Kartu Yang Sama<br>
		//		3. Ingatlah Letak Kartu Dengan Baik<br>
		//		4. Game Akan Berakhir Jika Kartu Sudah Habis / Waktu Sudah Habis<br>
		//		5. Selamat Bermain. Good Luck!<br>
		//	  </p></center>";
	}
	?>
	<center>
	<div id="rank" style="background: url(img/gambars/profil.png) center no-repeat; width: 50px; height: 50px; background-size: 50px; margin-top: -10px; margin-left: -900px" onClick="window.location='user.php'"></div><div id="back" style="background: url(img/gambars/back.png) center no-repeat; width: 100px; height: 100px; background-size: 95px; margin-top: -129px; margin-left: -110px" onClick="window.location='index.html'"></div></center>
	<?php
}
// <center></input><input type='submit' name='leaderboard' value='Ranking' onClick="window.location='leaderboard.php'"></input>  <input type='submit' name='logout' value='Logout' onClick="window.location='login.php?logout'"></input></center>
?>
</body>
</html>