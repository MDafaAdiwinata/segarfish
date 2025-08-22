 <?php
session_start();
include 'koneksi.php';

if ( isset($_POST['login']) ) {
    // Sanitasi input untuk mencegah SQL Injection
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    $sql = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");

    $cek = mysqli_num_rows($sql);

    if ( $cek > 0 ) 
    {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "<script>
            alert('Login Berhasil! Selamat Datang!');
            window.location.href = 'beranda.php';
        </script>";
    } else {
        echo "<script>
            alert('Username atau Password Salah!');
            window.location.href = 'login-user.php';
        </script>";
    }
}

?