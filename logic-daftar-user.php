 <?php
include 'koneksi.php';

if (isset($_POST['daftar'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cek username
  $cek = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username'");
  
  if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Username sudah terdaftar!');</script>";
  } else {

    // Simpan ke database
    $simpan = mysqli_query($koneksi, "INSERT INTO login (username, password) VALUES ('$username', '$password')");

    if ($simpan) {
      echo "<script>alert('Pendaftaran berhasil!'); window.location='login-user.php';</script>";
    } else {
      echo "<script>alert('Gagal daftar akun');</script>";
    }
  }
}
?>