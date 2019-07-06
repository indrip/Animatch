<?php
session_start();
$password = $_POST['password'];
$DB_NAME = 'login';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'indridiqiadi';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
$query = "SELECT * FROM user WHERE username='".$_POST['username']."' and password='$password'";
$query1 = "SELECT * FROM user WHERE username='".$_POST['username']."'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
	$_SESSION['username'] = $_POST['username'];
	$hasil = $mysqli->query($query1);
	$data = mysqli_fetch_array($hasil);
	$_SESSION['nickname'] = $data['nickname'];
	echo "<script>alert('Login Success!');window.location='account.php'</script>";
} else if($result->num_rows <= 0){
	echo "<script>alert('Login Failed!');window.location='login.php'</script>";
}
?>