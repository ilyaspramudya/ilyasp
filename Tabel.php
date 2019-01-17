<html>
<head>
    <title>Kelola Data Barang</title> 
    <link rel="stylesheet" type="text/css" href="11.css">
</head>
<body>
   <H3><div class= "jdl">KELOLA DATA BARANG</div></H3>
   <br>
   <br>
   
   <table width= 80% height 5% align="center">
    <tr>
	   <td><b>Data Barang</b></td>
	   <td><p align="right"><a href="sub.php"><Button class ="btn">Tambah</Button></a>
	</tr>
</table>
<br>

<table width= 80% height= 40% align= "center" border = 1 cellpadding= 0 cellpadding>
    <tr align= "center" class ="table">
	    <td>Kode</td>
		<td>Nama</td>
		<td>Harga</td>
		<td>Aksi</td>
	</tr>
  <?php
      include("connect.php"); 
	  $tampil =mysql_query("select * from barang");
	  while ($data = mysql_fetch_array($tampil)){
  ?>
  
  <tr align ="center">
	  <td><?php echo $data ['kode']; ?> </td>
	  <td><?php echo $data ['nama']; ?> </td>
	  <td><?php echo $data ['harga']; ?> </td>
      <td class = "11"><a href="edit.php?no=<?php echo $data['id'];?>" class="link">Edit</a>
	  <a href="hapus.php?id=<?php echo $data['id'];?>" class="link">Hapus</a></td>
  </tr>
  
  <?php
	  }
  ?>

  <?php 
      session_start();
	  if(!isset($_SESSION['username'])) {
	  header('location:login.php'); }
      else { $username = $_SESSION['username']; }
      require_once("koneksi.php");
      $query = mysql_query("SELECT * FROM login WHERE username = '$username'");
      $hasil = mysql_fetch_array($query);
  ?>
<center><?php echo "<h2>Selamat Datang, $username</h2>"; ?><a href="logout.php"><b>Logout</b></a></center>
      </table>
   </body>
</html>