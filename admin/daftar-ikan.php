 <?php
include 'koneksi.php';
$ambildata = mysqli_query($koneksi, "SELECT * FROM fish");

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

$filter_jenis = isset($_GET['jenis']) ? $_GET['jenis'] : '';

if ($filter_jenis == 'laut') {
    $ambildata = mysqli_query($koneksi, "SELECT * FROM fish WHERE jenis = 'laut'");
} elseif ($filter_jenis == 'tawar') {
    $ambildata = mysqli_query($koneksi, "SELECT * FROM fish WHERE jenis = 'tawar'");
} else {
    $ambildata = mysqli_query($koneksi, "SELECT * FROM fish");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Ikan - Admin</title>

    <!-- CSS Bootrstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/daftar-ikan.css">
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
              <a class="nav-link" href="dashboard.php">Dashboard</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link active" href="daftar-ikan.php">Daftar Ikan</a>
            </li> -->

            <!-- Dropdown Start -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active"
                href="#"
                id="daftarIkanDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Daftar Ikan
              </a>
              <ul class="dropdown-menu" aria-labelledby="daftarIkanDropdown">
                <li><a class="dropdown-item" href="daftar-ikan.php"></a></li>
                <li><a class="dropdown-item" href="daftar-ikan.php?jenis=laut">Laut</a></li>
                <li><a class="dropdown-item" href="daftar-ikan.php?jenis=tawar">Tawar</a></li>
              </ul>
            </li>
            <!-- Dropdown End -->
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

    <!-- Table Daftar Ikan Start -->

    <section class="daftar-ikan">
      <div class="container px-3">
        <div class="row">
          <div class="col text-center my-5">
            <h1 class="fw-bold">Daftar <span class="text-info">Ikan</span> Kami</h1>
          </div>
        </div>
        <div class="row justify-content-center">

        <!-- Logic Tampil Data - Perulangan -->
        <?php

        while( $tampildata = mysqli_fetch_array( $ambildata ) ) {

        ?>

          <div class="col-md-4 col-lg-3 col-sm-6 mb-5">
            <div class="card shadow-sm card-ikan">
              <img src="img/ikan/<?= $tampildata['gambar']; ?>" class="card-img-top" alt="gambar ikan">
              <div class="card-body">
                <h1 class="fs-3 fw-bold text-center"><?= $tampildata['fish_name'] ?></h1>
                <span class="d-block my-1 fs-5">Harga Ikan: Rp <?= $tampildata['price_per_kg']; ?> </span >
                <span class="d-block my-1 fs-5">Stock: <?= $tampildata['stock_kg']; ?> </span >
                <span class="d-block my-1 fs-5">Jenis: <?= $tampildata['jenis']; ?></span >
              </div>
            </div>
          </div>

        <!-- Akhir Logic Perulangan -->
        <?php
        }
        ?>

        </div>


      </div>
    </section>

    <!-- Table Daftar Ikan End -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html