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
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lokasi - Admin</title>

    <!-- CSS Bootrstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/lokasi.css" />
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
              <a class="nav-link" href="kelola-data.php">Kelola Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="lokasi.php">Lokasi</a>
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

        <!-- Lokasi Main Start -->

        <section class="lokasi">
      <div class="container text-center">
        <div class="row mt-5">
          <div class="col">
            <h1 class="fw-bold">Lokasi</h1>
          </div>
        </div>
        <div class="row pt-4">
          <div class="col">
            <div class="map-container border">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.056028583639!2d106.74974407706931!3d-6.2563496612584455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1745458642358!5m2!1sid!2sid"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="row mt-3 mb-5">
          <div class="col text-start ">
            <h1 class="mb-3 fw-bold">Jam Operasional:</h1>
            <p class="fs-5 mb-0">
              Senin - Jumat | 08:00 - 20:00
            </p>
            <p class="fs-5 mb-0">
              Sabtu | 09:00 - 18:00
            </p>
            <p class="fs-5">
              Minggu | 10:00 - 16:00
            </p>
          </div>
          <div class="col text-end ">
            <h1 class="mb-3 fw-bold">Hubungi Kami!</h1>
            <p class="fs-5 mb-0">
              Wa: 0812 - 3456 - 7890
            </p>
            <div class="fs-5">
              Telp: 021 - 324 - 565
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Lokasi Main End -->

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
  </body>
</html>