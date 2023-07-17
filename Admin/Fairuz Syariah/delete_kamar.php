<?php				
            $koneksi   = mysqli_connect("localhost", "root", "", "db_hotel");
            $ambildata = mysqli_query($koneksi,"select * from kamar_fairuzsyariah");

			$nomor = $_GET['nomor']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "delete from kamar_fairuzsyariah where nomor ='$nomor'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('Data Berhasil Dihapus.');window.location='admin_kamar.php';</script>";
	?>