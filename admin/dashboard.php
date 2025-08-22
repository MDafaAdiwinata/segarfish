 <?php

include "koneksi.php";
session_start();
if ( !isset($_SESSION['username']) )
{
    echo "
    <script>
        alert('Silahkan Login Terlebih Dahulu!');
        window.location.href = '../index.php';
    </script>
    ";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/dashboard.css">
  </head>
  <body>

    <!-- Navbar Start -->

    <nav
      class="navbar navbar-expand-lg navbar-dark p-3 sticky-top"
      style="background-color: #201e43"
    >
      <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="#"
          >Segar<span class="text-info fst-italic">Fish</span></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto fs-5 gap-lg-4 fw-light me-4">
            <li class="nav-item">
              <a class="nav-link active" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar-ikan.php">Daftar Ikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kelola-data.php">Kelola Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lokasi.php">Lokasi</a>
            </li>
          </ul>
          <div class="d-none d-lg-flex gap-3">
            <a class="btn btn-outline-danger text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout</a>
          </div>
          <div class="d-flex d-lg-none flex-column gap-3 mt-3">
            <a class="btn btn-outline-danger text-white w-100" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"     data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"    aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Peringatan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"     aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              Apakah anda ingin logout dari Admin?
            </p>
          </div>
          <div class="modal-footer">
            <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
            <a type="button" class="btn btn-danger" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar End -->

    <!-- Jumbotron Section Start -->

      <div class="container jumbotron text-center pt-5">
        <img
          class="img-thumbnail rounded-circle shadow mt-5"
          src="img/pp-admin.png"
          alt="Ikan Pp"
          width="300"
        />
        <h1 class="display-4 fw-bold my-4">Selamat Datang Admin!</h1>
        <p class="lead fs-4">Data Akurat, Layanan Tepat!</p>
        <div class="d-flex justify-content-center gap-3">
          <a class="btn btn-primary shadow-sm mt-3" href="daftar-ikan.php">Lihat Data</a>
          <a class="btn btn-outline-success mt-3" href="kelola-data.php">Kelola Data</a>
        </div>
    </div>

    <!-- Jumbotron Section End -->

    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html