<?php
$koneksi   = mysqli_connect("localhost", "root", "", "db_hotel");
$ambildata = mysqli_query($koneksi,"select * from review_royalglobal");
?>