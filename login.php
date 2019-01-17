<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="12.css">
</head>
<body>

<h2>Selamat Datang </h2>

<?php 
session_start();
if(isset($_SESSION['username'])){
header('location:Tabel.php');}
require_once("koneksi.php");
?>

<form action="proseslogin.php" method="post">
  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
        
    <button type="submit">Masuk</button>
    <input type="checkbox" checked="checked"><span>Ingat Saya</span>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

</body>
</html>
