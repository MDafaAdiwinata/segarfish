 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Segar Fish</title>

    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <!-- Section Head Start -->

    <section id="head">
      <div class="container-fluid">
        <div class="row">
          <div
            class="col-lg-6 full-height d-flex flex-column align-items-center justify-content-center text-center text-lg-start"
          >
            <div class="head-main w-75">
              <p class="navbar-brand fw-bold fs-3 mb-1" href="#">
                Segar<span class="text-info fst-italic">Fish</span>
              </p>
              <h1 class="display-3 fw-bold">Selamat Datang! 👋</h1>
              <h4 class="mt-2 mb-4 fw-light">
                🎏<em> Belanja Ikan Semudah Klik!</em>
              </h4>
              <p class="fs-4" style="text-align: justify">
                Lagi cari ikan segar tanpa harus repot ke pasar? Di sini
                tempatnya! Kami sediakan aneka jenis ikan laut dan air tawar,
                siap dikirim ke rumah Anda dengan kondisi segar dan harga
                terjangkau. Yuk, mulai belanja ikan dengan cara yang lebih
                praktis!
              </p>
              <a href="daftar-user.php" class="btn btn-outline-primary btn-lg me-2 px-4 shadow"
                >Daftar</a
              >
              <a href="login-user.php" class="btn btn-primary btn-lg px-4 shadow">Login</a>
            </div>
          </div>

          <div class="col-lg-6 full-height p-0 d-none d-lg-block">
            <div
              id="carouselExample"
              class="carousel slide h-100"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner h-100">
                <div class="carousel-item active">
                  <img
                    src="img/iklan-ikan1.jpg"
                    class="d-block w-100"
                    alt="Slide 1"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/iklan-ikan2.jpg"
                    class="d-block w-100"
                    alt="Slide 2"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/iklan-ikan3.jpg"
                    class="d-block w-100"
                    alt="Slide 3"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="prev"
              >
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide="next"
              >
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Head End -->

    <!-- Section Mengapa Kami Start -->

    <section id="mengapa-kami" style="background-color: #f3fbff">
      <div class="container py-5">
        <div class="row mb-5">
          <div class="col">
            <h1 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" class="display-5 fw-bold text-center">
              Mengapa <span class="text-primary">Kami?</span>
            </h1>
          </div>
        </div>
        <div class="row mb-5 justify-content-center">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
            <div class="card mb-lg-0">
              <img
                src="img/fish-fresh.png"
                class="card-img-top"
                alt="Mengapa Kami?"
              />
              <div class="card-body p-4">
                <h2 class="card-title text-center fs-5">
                  Produk Segar Langsung dari Sumber Ikan langsung dari
                  nelayan/supplier
                </h2>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1500">
            <div class="card mb-lg-0">
              <img
                src="img/delivery.png"
                class="card-img-top"
                alt="Mengapa Kami?"
              />
              <div class="card-body">
                <h2 class="card-title text-center fs-5 mt-3 mb-2">
                  Pengiriman Cepat & Terjamin Dikemas rapi, sampai ke rumah
                  tetap segar
                </h2>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
            <div class="card mb-lg-0">
              <img
                src="img/kemudahan.png"
                class="card-img-top"
                alt="Mengapa Kami?"
              />
              <div class="card-body">
                <h2 class="card-title text-center fs-5 mt-3 mb-2">
                  Pesan Mudah Lewat Website Tinggal klik, kami antar ke rumah
                  Anda
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Mengapa Kami End -->

    <!-- Section Kontak Kami Start -->

    <section id="kontak-kami">
      <div class="container py-5">
        <div class="row mb-5">
          <div class="col">
            <h1 class="display-5 fw-bold text-center" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500">
              <span class="text-info"> Hubungi </span>
              Kami
            </h1>
          </div>
        </div>
        <div class="row mb-5">
          <div
            class="col-lg-6 d-flex flex-column align-items-center justify-content-center mb-4 mb-lg-0"
          data-aos="fade-right" data-aos-delay="100" data-aos-duration="1500">
            <form class="w-75">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama: </label>
                <input
                  type="username"
                  class="form-control"
                  id="nama"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="text" class="form-label">Pesan:</label>
                <input type="text" class="form-control" id="text" />
              </div>
              <button type="submit" class="btn btn-outline-primary w-100">
                Submit
              </button>
            </form>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1500">
            <div class="ratio ratio-16x9 rounded shadow">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.056028583639!2d106.74974407706931!3d-6.2563496612584455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1745458642358!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Kontak Kami End -->

    <!-- Footer Start -->

    <footer style="background-color: #e8f7ff;">
      <div class="container-fluid py-4 border-top border-primary">
        <div class="fs-5 fw-light text-center">
          Created by <span class="fw-bold">Codex</span> | © 2025
        </div>
      </div>
    </footer>

    <!-- Footer End -->

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
  </body>
</html>