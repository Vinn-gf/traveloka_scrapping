<?php
// memulai sesi
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
	<div class="menu-box">
		<h1>
			<?php
			// mengecek apakah pengguna sudah login dan levelnya adalah "pengguna"
			if(isset($_SESSION['username']) && $_SESSION['level'] == "pengguna"){
				// menampilkan pesan selamat datang dengan username pengguna
				echo "<h1>Selamat Datang, ".$_SESSION['username']."!</h1>";
			} else {
				// jika pengguna belum login atau levelnya bukan "pengguna", redirect ke halaman login
				header("location: ../login.php");
				exit;
			}
				?>
		</h1>
        <h2>Silahkan Pilih Hotel Yang Ingin Anda Kunjungi</h2>
		<ul>
			<li><a href="../Royal Global/hotel.php">Royal Global Hotel</a></li>
			<li><a href="../Fairuz Syariah/hotel.php">Fairuz Syariah Hotel</a></li>
			<li><a href="../Avicenna/hotel.php">Avicenna Hotel</a></li>
            <li><a href="../Batu Suli/hotel.php">Batu Suli Hotel</a></li>
			<form action="../logout.php">
				<button type='logout' class="btn btn-danger">Logout</button>
			</form>
		</ul>
	</div>
</body>
</html>
