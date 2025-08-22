 <?php

include "koneksi.php";

$sql = mysqli_query( $koneksi, "SELECT * FROM fish WHERE fish_id='$_GET[kode]'" );
$data = mysqli_fetch_array( $sql );

// Logic Ubah Data
if ( isset($_POST['ubah']) )
{
    if ($_FILES['NamaFile']['name'] != "") {
        move_uploaded_file($_FILES['NamaFile']['tmp_name'], "img/ikan/" . $_FILES['NamaFile']['name']);
        $gambar = $_FILES['NamaFile']['name'];
    } else {
        $gambar = $data['gambar'];
    }
 
    mysqli_query( $koneksi, "UPDATE fish SET
      fish_name = '$_POST[nama_ikan]',
      price_per_kg = '$_POST[harga_ikan]',
      stock_kg = '$_POST[stock_ikan]',
      jenis = '$_POST[jenis_ikan]',
      deskripsi = '$_POST[deskripsi]',
      gambar = '$gambar'
      WHERE fish_id = '$_GET[kode]'");

  echo "<script>
  alert('Data Berhasil DiUbah!');
  window.location.href = 'kelola-data.php';
  </script>";
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kelola Data [Ubah Data] - Admin</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/ubah-data.css">
</head>
  <body>
    
    <!-- Navbar Start -->

    <nav
      class="navbar navbar-expand-lg navbar-dark p-3 sticky-top"
      style="background-color: #201e43"
    >
      <div class="container">
        <a class="fw-bold fs-3 text-decoration-none text-white d-md-inline" href="#"
          >Segar<span class="text-info fst-italic">Fish</span></a
        >
      </div>
    </nav>

    <!-- Navbar End -->

    <!-- Section Tambah Data Start -->

    <section id="tambah-data">
      <div class="container">
      <form class="w-xl w-lg-50 mx-auto mt-5 p-4 border rounded" id="form-tambah" action="" method="post" enctype="multipart/form-data">
      <div class="row mb-3">
          <div class="col text-center align-items-center">
          <a class="btn btn-outline-dark mb-3 me-4 " href="kelola-data.php">
            <i class="bi bi-caret-left-fill"></i>
            </a>
            <h1 class="d-inline-block fs-lg-5 fs-sm-2 fw-bold">Ubah Data</h1>
          </div>
        </div>
        <div class="mb-3">
          <label for="nama_ikan" class="form-label fs-5">Nama Ikan</label>
          <input type="text" class="form-control" id="nama_ikan" name="nama_ikan" value="<?php echo $data['fish_name'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="harga_ikan" class="form-label fs-5">Harga Ikan (Kg)</label>
          <input type="number" class="form-control" id="harga_ikan" name="harga_ikan" value="<?php echo $data['price_per_kg'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="stock_ikan" class="form-label fs-5">Stock Ikan</label>
          <input type="number" class="form-control" id="stock_ikan" name="stock_ikan" value="<?php echo $data['stock_kg'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="jenis_ikan" class="form-label fs-5">Jenis Ikan</label>
          <input type="text" class="form-control" id="jenis_ikan" name="jenis_ikan" value="<?php echo $data['jenis'] ?>" required>
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label fs-5">Deskripsi</label>
          <textarea class="w-100 form-control" name="deskripsi" id="deskripsi" row="4" cols="100"><?= $data['deskripsi']; ?></textarea>
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label fs-5">Gambar Ikan</label>
          <input type="file" class="form-control mb-2" id="gambar" name="NamaFile" >
          <small class="form-text text-muted">Gambar saat ini: <?= $data['gambar']; ?></small>
          <?php if (!empty($data['gambar']) && file_exists("img/ikan/" . $data['gambar'])): ?>
            <img src="img/ikan/<?=$data['gambar']; ?>" alt="Preview Gambar"  width="150" class="mt-2 img-thumbnail d-block">
          <?php endif; ?>
        </div>
        <button type="submit" name="ubah" class="btn btn-outline-primary mt-3 w-100 fw-bold">Simpan</button>
</form>
      </div>
    </section>

    <!-- Section Tambah Data End -->
    
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html