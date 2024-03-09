<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top">
        <div class="container">
            <div class="container-fluid d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img width="200" height="50" src="{{ asset('assets/img/logo-libtel.svg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#katalogi">Katalogi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tentang-kami">Tentang Kami</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <button class="btn" style="height: 3rem; background-color: rgb(176, 31, 31); border-radius: 10px;">
                                <a class="nav-link text-white text-center" href="#">Daftar</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 5rem; margin-left: 10rem">
        <img src="{{ asset('assets/img/banner.svg')}}" alt="">
    </div>
    <div id="katalogi">
        <div class="container" style="margin-top: 5rem; margin-left: 10rem">
            <div class="container-fluid d-flex">
             <div class="">
                <h2>Filter</h2>
                <label for="">Filter Berdasarkan</label>
                <select class="form-select" aria-label="Default select example" style="width: 19rem;">
                    <option selected>Pilih</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <label for="">Cari</label>
                  <input type="text" class="form-control" style="width: 19rem;" placeholder="Cari...">
                  <br>
                  <button type="submit" class="btn text-white" style="height: 3rem; width: 4rem; background-color: rgb(176, 31, 31); border-radius: 10px;">cari</button>
             </div>
            <div class="angka" style="margin-left: 9rem;">
                <h3><b>Buku Populer</b></h3>
                <p class="">
                    Vue JS: Sentuhan Ajaib <br />
                    Untuk Antarmuka <br />Pengguna yang lebih <br />hidup!
                  </p>
                <img src="{{ asset('assets/img/vue.png')}}" alt="" height="200">
                <p> <b>Lorem</b></p>
            </div>
            </div>
        </div>
    </div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
