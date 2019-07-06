<?php
  include('koneksi.php');
  session_start();
  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
  if ($_SESSION['username'] == is_null()) {
?>
    <html>
  <head>
  <title>Create Account</title>
  <style type="text/css">
      body{
        background: url(img/gambars/hasil.png) center no-repeat;
        background-size: 1366px;
        background-position: 0px -50px ;
      }
    </style>
  </head>
  <body style="margin-top: 300px;">
<?php
  echo "<center><h1>Silahkan Login Terlebih Dahulu<br><a href='login.php' style='text-decoration: none'> Disini</a></h1></center>";
?>
  </body>
  </html>
<?php
  } else {
  $query = "INSERT INTO scores (nickname, score, timer, level)
        VALUES ('".$_SESSION['nickname']."', '".$_COOKIE['score']."', '".$_COOKIE['waktu']."', '".$_SESSION['level']."')";
  $hasil = mysqli_query($db, $query);
  header("Location: end.php");
}
?>