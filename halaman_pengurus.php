<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pengurus</title>
</head>
<body>
<?php
	session_start();
	if($_SESSION['level']==""){
		header("localhost:index.php?pesan=gagal");
	}
?>
	<h1>Halaman Pengurus</h1>
	<p>Halo<b><?php echo $_SESSION['username'];?></b>Anda telah login sebagai<b><?php echo $_SESSION['level'];?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	<br/>
</body>
</html>