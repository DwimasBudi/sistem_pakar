<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }
        .vh-100 {
        height: 100vh;
    }
        .container-fluid {
            /* background-color: #ffffff; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            /* border-radius: 8px; */
            /* padding: 20px; */
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .btn-secondary {
            background-color: #ffffff;
            color: #000000;
            border-color: #ced4da;
        }

        .btn-primary {
            background-color: #0E4BF1;
            border-color: #0E4BF1;
        }

        .btn-outline-primary {
            border-color: #0E4BF1;
            color: #0E4BF1;
        }

        .btn-outline-primary:hover {
            background-color: #0E4BF1;
            color: #ffffff;
        }

        .text-primary {
            color: #0E4BF1 !important;
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::before {
            background-color: #0E4BF1;
        }

        .progress-bar {
            background-color: #0E4BF1;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container .btn {
            flex: 1;
            margin: 0 5px;
        }

        .navbar-toggler {
            border-color: rgba(0, 0, 0, .1);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .nav-item a {
            color: #000 !important;
        }

        .nav-item a:hover {
            color: #0E4BF1 !important;
        }

        .main-content {
            padding-top: 0;
        }
        .tanya{
            font-weight: 600;
        }
    </style>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-light mb-0">
        <a class="navbar-brand text-primary" href="#">SMAS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Diagnosis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Riwayat Diagnosa</a>
                </li>
            </ul>
        </div>
    </nav> --}}
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">SMAS</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ asset('/#hero') }}" class="active">Home<br></a></li>
          <li><a href="{{ asset('/#about') }}">About</a></li>
          <a class="btn-getstarted flex-md-shrink-0" href="/login">Login</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

     

    </div>
  </header>
    <div class="container-fluid main-content vh-100">
        <div class="row vh-100">
            <!-- Main Content -->
            <div class="col-md-8 p-4 order-md-2">
                {{-- <div class="row mb-4">
                    <div class="nav-item custom-control custom-radio custom-control-inline">
                        <a href="#" class="nav-link">
                            <i class="uil uil-clipboard-alt"></i>
                            <span>Riwayat Diagnosa</span>
                        </a>
                    </div>
                    <div class="nav-item custom-control custom-radio custom-control-inline">
                        <a href="#" class="nav-link">
                            <i class="uil uil-stethoscope-alt"></i>
                            <span>Diagnosa</span>
                        </a>
                    </div>
                </div> --}}
                {{-- <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                <h5>Dalam sebulan terakhir, seberapa sering kamu...</h5>
                <form>
                    @foreach ($gejala->take(1) as $item)
                    <div class="form-group active">
                        <label class="tanya">{{ $item->nama_gejala }}</label>
                        <div>
                            <div class="custom-control custom-radio custom-control-inline m-3">
                                <input type="radio" id="0" name="{{ $item->id }}" class="custom-control-input">
                                <label class="custom-control-label" for="0" value="0">Tidak</label>
                            </div>
                            {{-- <div class="custom-control custom-radio custom-control-inline m-3">
                                <input type="radio" id="0.4" name="{{ $item->id }}" class="custom-control-input">
                                <label class="custom-control-label" for="0.4" value="0.4">Sedikit yakin</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline m-3">
                                <input type="radio" id="0.6" name="{{ $item->id }}" class="custom-control-input">
                                <label class="custom-control-label" for="0.6" value="0.6">Cukup Yakin</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline m-3">
                                <input type="radio" id="0.8" name="{{ $item->id }}" class="custom-control-input">
                                <label class="custom-control-label" for="0.8" value="0.8">Yakin</label>
                            </div> --}}
                            <div class="custom-control custom-radio custom-control-inline m-3">
                                <input type="radio" id="1" name="{{ $item->id }}" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="1" value="1">IYA</label>
                            </div>
                        </div>
                    <div class="btn-container">
                        <button type="button" class="btn btn-outline-primary">Kembali</button>
                        <button type="button" class="btn btn-primary">Selanjutnya</button>
                    </div>
                    </div>
                    @endforeach
                </form>
            </div>
            <!-- Left Sidebar -->
            <div class="col-md-4 bg-light p-4 order-md-1">
                <img src="/img/Picture2.png" alt="Logo" class="mb-4" style="width: 150px;">
                <h2 class="text-primary">Cek Kecanduan Media Sosial</h2>
                <p>Kecanduan media sosial dapat mempengaruhi siapa saja. Penyebabnya beragam, mulai dari kombinasi dari kepuasan instan melalui dopamin, ketakutan akan ketinggalan informasi (FOMO), dan pencarian validasi sosial yang terus-menerus. Ayo cek kondisi kecanduan media sosial mu sekarang!</p>
                <!-- <h5>Keunggulan Fitur</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><span class="text-primary">&#10004;</span> Wawasan seputar stres berdasarkan level
                        stres</li>
                    <li><span class="text-primary">&#10004;</span> Akses cepat untuk berkonsultasi dengan dokter
                        spesialis dan psikolog</li>
                </ul> -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>