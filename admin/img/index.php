 <?php
session_start();
// Redirect ke halaman daftar-ikan jika sudah login
if(isset($_SESSION['username'])) {
  header('location:dashboard.php');
  exit;
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- CSS Eksternal -->
     <link rel="stylesheet" href="css/index.css">
  </head>
  <body>

    <!-- Input Login Admin Start -->
      <div class="container-fluid form-container">
          <form class="form-head position-absolute top-50 start-50 translate-middle" action="login.php" method="post">
            <div class="row">
              <div class="col">
                <h1 class="fs-2 fw-bold text-center mb-4">
                  Masuk Admin
                </h1>
              </div>
            </div>
              <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="username" class="form-control border-secondary" id="username" name="username">
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control border-secondary" id="password" name="password">
              </div>
              <div class="d-grid gap-2">
                  <input class="login mt-3 btn btn-primary border-0 shadow-sm fw-bold btn-masuk" type="submit" value="Masuk" name="login" />
              </div>
          </form>
      </div>

    <!-- Input Login Admin End -->

    <!-- Script Bootrstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html