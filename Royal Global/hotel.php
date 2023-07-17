<?php
include '../koneksi.php'
?>
<!DOCTYPE html>
<html>

<head>
	<title>Scrapping Royal Global</title>


	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap"
		rel="stylesheet">
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>

<body>
	<section class="s1">
    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="display: flex; flex-direction: row;">
                        <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="../Beranda/home.php">Royal Global Hotel</a></h6>
                            <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="hotel.php">Review</a></h6>
                            <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="kamar.php">Kamar</a></h6>
                            <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="fasilitas.php">Fasilitas</a></h6>
                            <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="nearby_place.php">Tempat Terdekat</a></h6>
                            <h6 class="m-0 font-weight-bold text-primary" style="padding: 0px 12px;"><a href="popular.php">Tempat Populer</a></h6>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Rating</th>
                        <th>Tanggal</th>
                        <th>Review</th>  
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
$data_royal     = mysqli_query($koneksi, "select * from review_royalglobal");
$data_hotel   = mysqli_query($koneksi, "select * from review_royalglobal");
while($data = mysqli_fetch_array($data_hotel)){
            ?>
                <tr>
                    <td><?php echo $data['nomor']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['rate']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['review']; ?></td>
                </tr>
                <?php
}
?>    
            </tbody>
            </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
			</div>
</body>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</html>