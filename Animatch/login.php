<?php
session_start();
if (isset($_SESSION['username'])){
    $status = true;
  } else {
    $status = false;
  }
  if(isset($_GET['logout'])) {
    session_destroy();
    setcookie('waktu', '', 0, '/Kartu');
    setcookie('score', '', 0, '/Kartu');
    header('Location: login.php');
    exit;
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <?php
    if ($status == false){
    ?>
    </head>
    <body style="background: url(img/gambars/blur.jpeg) center no-repeat;background-size: 1366px;">
    <?php
    } else {
    ?>
    <style type="text/css">
    body{
      background: url(img/gambars/wb3.jpeg) center no-repeat;
      background-size: 1366px 670px;
      background-attachment: fixed;
    }
    </style>
    </head>
    <body>
    <?php
    }
    ?>
<center>
  <form action="proseslogin.php" method="post">
  <?php
      // jika status = false (cookie username tak ada), maka tampilkan form input nama
      // dan tombol submit dg nama 'submit1'
      if ($status == false){
    ?>
    <table style="background: url(img/gambars/background_login.png) center no-repeat; width: 416px; height: 522px; background-size: 576px; margin-top: 70px;box-shadow: 0px 0px 0px 5px #0e0e0e;">
      <th style="color: white; font-size: 30px;padding-top: 85px;">Login</th>
      <tr><td style="color: white; position: absolute; margin-left: 172px; margin-top: -7px;">Username</td></tr>
      <tr><td><input name="username" type="text" required style="width: 210px; position: absolute; height: 20px; margin-left: 100px; margin-top: -67px"></td></tr>
      <tr><td style="color: white; position: absolute; margin-left: 175px; margin-top: -68px;"><br>Password</td></tr>
      <tr><td><input name="password" type="password" required style="width: 210px; position: absolute; height: 20px; margin-left: 100px; margin-top: -110px"></td></tr>
      <tr><td><input type="submit" value="" name="login" style="position:absolute; margin-top: -122px; margin-left: 163px; background: url(img/gambars/login.png) center no-repeat; height: 44px; width: 95px; background-size: 90px;border-radius: 10px;border: none;"></td></tr>
      <tr><td style="position: absolute; margin-top: -80px; margin-left: 110px;color: black;text-shadow: 0px 0px 5px white;"><b>Belum Punya Akun ?</b> <a href="daftar.php" style=" text-decoration: none; color: black"><b>Register</b></a></td></tr>
    </table>
  <?php   
      } else {
      // jika status = true (cookie username ada), maka tampilkan username
      // tanggal terakhir kali main, dan score. Data ini diambil dari cookie
      // serta tampilkan tombol submit dg nama 'submit2'
      echo "<center><h1 style='margin-top: 100px;color:#e5e5e5; opacity:0.7; margin-left:60px;'>".$_SESSION['nickname']."</h1></center>";
  ?>
      <div id="back" style="background: url(img/gambars/logout.png) center no-repeat; width: 100px; height: 100px; background-size: 100px;margin-left: -50px;margin-top: -20px" onClick="window.location='?logout'"></div>
      <div id="back" style="background: url(img/gambars/start.png) center no-repeat; width: 100px; height: 100px; background-size: 100px;margin-left: 170px;margin-top: -100px;" onClick="window.location='account.php'"></div>
      </center>
    <?php   
      }
    ?>
  </form>
</center>
</body>
</html>