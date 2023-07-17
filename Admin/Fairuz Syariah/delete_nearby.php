<?php				
            $koneksi   = mysqli_connect("localhost", "root", "", "db_hotel");
            $ambildata = mysqli_query($koneksi,"select * from nearby_fairuzsyariah");

			$nomor = $_GET['nomor']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "delete from nearby_fairuzsyariah where nomor ='$nomor'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('Data Berhasil Dihapus.');window.location='admin_nearby_place.php';</script>";
	?>