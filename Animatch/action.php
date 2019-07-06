<?php
	if (isset($_POST['daftar'])){
	 	$username = $_POST['username'];
		$pass = $_POST['password'];
		$nick = $_POST['nickname'];
		$photo = $_FILES['images']['name'];
		$choice = $_POST['choice'];
		if ($choice == "male") { 
		  $gender = "Male";              
		}
		else if ($choice == "female") { 
		  $gender = "Female";         
		}
		$temp = explode('.', $_FILES['images']['name']);
		$ekstensi = pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION);
	 	move_uploaded_file($_FILES['images']['tmp_name'],'photos/'.$stringfoto.'.'. end($temp));
	}
?>
<html>
<head>
<title>Create Account</title>
</head>
<body>
	<?php
		// tampilkan username dari cookie
		echo "<table>";
		echo "<tr><td>Username</td><td>:</td><td> ".$_COOKIE['username']."</td></tr>";
		// tampilkan lives dan score dari session
		echo "<tr><td>Lives</td><td>:</td><td> ".$_SESSION['lives']."</td></tr>";
		echo "<tr><td>Score</td><td>:</td><td>".$_SESSION['score']."</td></tr>";
	?>

	<?php
		// jika nilai status sudah ada
		if (isset($status)){
			// jika status = true, maka munculkan 'jawaban benar'
			if ($status == true){
				echo "<tr><td>Status</td><td>:</td><td>Jawaban Anda Benar</td></tr>";
			} else {
				// jika status = false, maka munculkan 'jawaban salah'
				echo "<tr><td>Status</td><td>:</td><td>Jawaban Anda Salah</td></tr>";
			}
		}
	?>

	<?php
		// jika lives = 0, maka game over
		if ($_SESSION['lives'] == 0){
			// simpan skor dan waktu main ke dalam cookie
			setcookie('score', $_SESSION['score'], time()+3600*24*7);
			setcookie('lasttime', date('d/m/Y H:i'), time()+3600*24*7);

			// script untuk insert data ke scores
			include "mathconfig.php";
			$ip = $_SERVER['REMOTE_ADDR'];
			$access_key = '5ce4e58e9f2a06a7e682b659f5b0a2dd';

            // Initialize CURL:
            $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response:
            $api_result = json_decode($json, true);

            // Output the "capital" object inside "location"
            $negara = $api_result['country_name'];
			$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			$query = "INSERT INTO scores (username, score, playtime, ipaddress, country, foto)
			  VALUES ('".$_COOKIE['username']."', '".$_SESSION['score']."', '".date('Y-m-d H:i:s')."', '$ip', '$negara', '".$_COOKIE['stringfoto'].'.'.$_COOKIE['eks']."')";
			$hasil = mysqli_query($db, $query);
			header("location: end.php");
			
		} else {
	?>
	<form method="post" action="action.php">
		<?php
			// munculkan kedua bilangan random x dan y
			echo "<tr><td>Soal</td><td>:</td><td>$x + $y</td></tr>";
		?>
		<input type="hidden" name="x_old" value="<?php echo $x;?>">
		<input type="hidden" name="y_old" value="<?php echo $y;?>">
		<tr><td>Jawaban</td><td>:</td><td><input type="text" name="hasil"></td></tr>
		<tr><td></td><td></td><td><input type="submit" name="submit"></td></tr></table>
	</form>
	<?php
		}
	?>
			</div>
		</div>
		<?php
		include ('Sidebar.php');
		include ('Footer.php');
		?>
		</div>
	</div> 
</body>
</html>