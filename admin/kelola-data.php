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


// Logic Hapus Data
if ( isset($_GET['kode']) )
{
  mysqli_query( $koneksi, "DELETE FROM fish WHERE fish_id='$_GET[kode]'" );

  echo "<script>
  alert('Data Berhasil di Hapus!');
  window.location.href = 'kelola-data.php';
  </script>";
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Data - Admin</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/kelola-data.css">
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
              <a class="nav-link " href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar-ikan.php">Daftar Ikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="kelola-data.php">Kelola Data</a>
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
              Apakah anda ingin logout?
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
    
    <!-- Table Daftar Ikan - Kelola Data Start -->

    <section class="daftar-ikan">
      <div class="container">
        <div class="row text-center my-5">
          <div class="col">
            <h1 class="fw-bold">Kelola <span class="text-primary">Data</span></h1>
          </div>
        </div>
        <div class="row">
          <div class="col mb-5 text-end table-responsive">
            <table class="table table-bordered border-dark">
              <thead class="table-primary">
                <tr>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">ID</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Nama Ikan</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Harga Per Kg</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Stock (Kg)</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Jenis</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Deskripsi</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Gambar</th>
                  <th scope="col" style="text-align: center; font-size: 1.2rem;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                include 'koneksi.php';
                $ambildata = mysqli_query($koneksi, "SELECT * FROM fish");

                while ($tampildata = mysqli_fetch_array($ambildata)) {
                ?>
                <tr>
                  <td style="text-align: center" width="1%">
                    <?= $tampildata['fish_id']; ?>
                  </td>
                  <td style="" align="start"><?= $tampildata['fish_name']; ?></td>
                  <td style="" align="end"><?= $tampildata['price_per_kg']; ?></td>
                  <td style="" align="end"><?= $tampildata['stock_kg']; ?></td>
                  <td style="" align="center"><?= $tampildata['jenis']; ?></td>
                  <td style="width: 30%;" align="justify"><?= $tampildata['deskripsi']; ?></td>
                  <td align="center">
                    <img src="img/ikan/<?php echo $tampildata['gambar'] ?>" width="80">
                  </td>
                  <td style="" align="center">
                    <a class="btn btn-warning me-2 btn-ubah" href="ubah-data.php?kode=<?= $tampildata['fish_id']; ?>">Ubah</a>
                    <a class="btn btn-danger" href="?kode=<?= $tampildata['fish_id'] ?>" onclick="return confirm('Yakin ingin menghapus data ikan ini?');">Hapus</a>
                </td>
                </tr>
                <?php 
                }
                ?>

              </tbody>
            </table>
            <a href="tambah-data.php" class="btn btn-success">Tambah</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Table Daftar Ikan - Kelola Data End -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html