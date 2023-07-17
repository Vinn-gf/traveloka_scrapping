<?php
// mengaktifkan session
session_start();

// memanggil koneksi database
include "koneksi.php";

// mengecek apakah tombol login sudah diklik atau belum
if (isset($_POST['login'])) {

  // mengambil data yang dikirim dari form login
  $username = $_POST['username'];
  $password = $_POST['password'];

  // memeriksa ke database apakah username dan password ada di dalam tabel pengguna
  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
  $cek = mysqli_num_rows($query);

  // jika username dan password benar
  if ($cek > 0) {

    // mengambil data pengguna dari database
    $data = mysqli_fetch_assoc($query);

    // menyimpan data pengguna ke dalam session
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    // jika level pengguna adalah admin, redirect ke halaman admin.php
    if ($_SESSION['level'] == "admin") {
      header("location:admin/admin.php");

      // jika level pengguna adalah pengguna, redirect ke halaman pengguna.php
    } elseif ($_SESSION['level'] == "pengguna") {
      header("location:Beranda/home.php");
    }

    // jika username atau password salah
  } else {
    echo "<script>alert('Username atau Password Salah!');</script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Halaman Login</title>
</head>

<body>
  <h2>Login</h2>
  <div class="login-form">
    <form method="post" action="">
      <label>Username:</label><br>
      <input type="text" name="username"><br>
      <label>Password:</label><br>
      <input type="password" name="password"><br><br>
      <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>

</html>