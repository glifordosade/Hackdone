<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetaTani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
  <body>

    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/Petatani.png" alt="Logo" style="width:50px; height:50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#part1">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#part2">Layanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#part3">Tentang Kami</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <button type="button" class="btn btn-success" style="font-size:15px; background-color:#055C46;">Buat Akun</button>
                        <button type="button" class="btn btn-success" style="font-size:15px; background-color:#055C46;">Masuk</button>
                    </span>
                </div>
            </div>
        </nav>
    </div>


    <div id="part1">
        <div class="container text-left">
            <div class="row">
              <div class="col">
                <h1 style=" font-weight: bold; margin-top:50px; font-size:40px">Solusi Inovatif untuk Manajemen <span style=" color:#F47E20;">Pertanian</span> </h1>
                <h4 style=" font-size:20px; color:#646464; margin-top:50px">Menghubungkan Petani, Konsumen, dan Pemerintah. Bergabunglah dengan kami untuk meningkatkan efisiensi dan akses pasar langsung.
                    Login sekarang dan mulai optimalkan pertanian Anda!</h4>
              </div>
              <div class="col">
                <img src="img/landingnew.png" style="width:500px; height:500px">
              </div>

            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button class="btn btn-primary me-md-2" type="button" style=" font-size:20px; background-color:#055C46;">Masuk</button>
                <button class="btn btn-primary" type="button">Pelajari Lebih Lanjut </button>
              </div>


          </div>
    </div>


    <div id="part2">
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <h3 style="margin-top: 150px; color:#055C46">Layanan</h3>
                <h3>Peta Tani Menyediakan</h3>

              </div>
            </div>
            <div class="row">
                <div class="col" style="margin-top:20px">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body ">
                          <h5 class="card-title">Jual Produk Tani</h5>
                          <p class="card-text">Unggah dan jual hasil tani Anda dengan mudah.</p>
                          <a href="#" class="card-link">Learn More</a>

                        </div>
                      </div>
                </div>
                <div class="col" style="margin-top:20px">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body ">
                          <h5 class="card-title">Jual Produk Tani</h5>
                          <p class="card-text">Unggah dan jual hasil tani Anda dengan mudah.</p>
                          <a href="#" class="card-link">Learn More</a>

                        </div>
                      </div>
                  </div>
                  <div class="col" style="margin-top:20px">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body ">
                          <h5 class="card-title">Jual Produk Tani</h5>
                          <p class="card-text">Unggah dan jual hasil tani Anda dengan mudah.</p>
                          <a href="#" class="card-link">Learn More</a>

                        </div>
                      </div>
                  </div>
              </div>
          </div>
    </div>


    <div id="part3">
        <div class="container text-center">
            <div class="row">
              <div class="col">
                <h5>Tentang Kami</h5>


              </div>
            </div>
            <div class="row">
                <div class="col ">
                    <h2>PetaTani merupakan aplikasi yang berkerja sama dengan kementrian pertanian alam membantu pengawasan distribusi hasil tani</h2>

                </div>

              </div>
              <div class="row">
                <div class="col ">
                    <h4>Dadakan Euy</h4>

                </div>

              </div>

          </div>

      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
