 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar User</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- CSS Eksternal -->
     <link rel="stylesheet" href="css/daftar-user.css">
  </head>
  <body>

    <!-- Input Login Admin Start -->
      <div class="container-fluid form-container">
          <form class="form-head position-absolute top-50 start-50 translate-middle" action="logic-daftar-user.php" method="post">
            <div class="row">
              <div class="col">
                <h1 class="fs-2 fw-bold text-center mb-4">
                  Daftar User
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
                  <input class="login mt-3 btn btn-primary border-0 shadow-sm fw-bold btn-masuk" type="submit" value="Daftar" name="daftar" />
                  <a href="index.php" class="mt-2 border-0 btn btn-dark text-center text-decoration-none btn-kembali">Kembali</a>
              </div>
          </form>
      </div>

    <!-- Input Login Admin End -->

    <!-- Script Bootrstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html