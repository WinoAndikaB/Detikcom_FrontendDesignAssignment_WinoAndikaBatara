<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Frontend Designer Assignment</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="/home">
                    <h6 class="text-white">Detikfinance</h6>
                    <h4 class="text-white fw-bold">DETIKFINANCE BUSINESS PLAN</h4>
                    <h6 class="text-white fw-bold">COMPETITION 2023</h6>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0">Detikfinance Business Plan Competition 2023</h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="" class="nav-item nav-link">About</a>
                        <a href="" class="nav-item nav-link">Mechanism</a>
                        <a href="" class="nav-item nav-link">Latest Update</a>
                        <a href="/register" class="nav-item nav-link">Register</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <p class="fs-4 text-white animated slideInRight">Welcome to
                                        <strong>Detikfinance Detikfinance Business Plan Competition 2023</strong>
                                    </p>
                                    <h2 class="display-1 text-white mb-4 animated slideInRight">EMPOWERING INDONESIA STARTUP</h2>
                                    <h6 class="text-white animated slideInRight">Detikfinance memberikan ruang kepada para startup di indonesia untuk menunjukkan, serta mempromosikan brand mereka untuk mendapatkan perhatian dari benture capital atau angel investor</h6>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInRight">Daftarkan Startup Kamu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <p class="fs-4 text-white animated slideInLeft">Welcome to
                                        <strong>Detikfinance Detikfinance Business Plan Competition 2023</strong>
                                    </p>
                                    <h2 class="display-1 text-white mb-5 animated slideInLeft">EMPOWERING INDONESIA STARTUP</h2>
                                    <h6 class="text-white animated slideInLeft">Detikfinance memberikan ruang kepada para startup di indonesia untuk menunjukkan, serta mempromosikan brand mereka untuk mendapatkan perhatian dari benture capital atau angel investor</h6>
                                    <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Daftarkan Startup Kamu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

     <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/watch?v=zZNEvBvOHII" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <h1 class="display-6 mb-4">About Detikfinance Business Plan Competition 2023</h1>
                        <p class="mb-4">Detikfinance kali akan memberikan ruang bagi startup untuk networking dan memamerkan produk inovasinya di hadapan
                            venture capital dan angel investor. Acara ini juga akan menghadirkan para pengembang teknologi dan pelaku bisnis untuk memberikan edukasi dan inspirasi bagi
                            Indonesia dan teknofilia mengenai pekembangan teknologi di Indonesia.
                        </p>
                            <div class="d-flex">
                                <p>Share</p>
                                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://web.facebook.com/detikcom/"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/detikcom/"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.linkedin.com/company/detik-com/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Mekanisme -->
    <h1 class="text-center">MEKANISME</h1>
    <div class="container-xxl py-2">
        <div class="card">
            <div class="card-body">
                <h4>Registrasi</h4>
                <p>1. Calon peserta diminta untuk mengisi formulir pendaftaran online yang berisi informasi pribadi, kontak, dan rician tim pada <a href="/">link berikut</a>
                    <br> 
                   2. Selain itu, peserta jugga diharapkan mengunggah ringkasan rencana bisnis mereka yang mencakup visi, misi, strategi, dan analisis pasar
                </p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-2">
        <div class="card">
            <div class="card-body">
                <h4>Seleksi Peserta</h4>
                <p>1. Tim Seleksi akan meninjau setiap pendaftaran dan mengevaluasi kualitas dari kelayakan bisnis plan yang diajukan
                   <br> 
                   2. Kritea evaluasi dapat mencakup inovasi, potensi pertumbuhan, kelayakan keuangan, dan kejelasan presentasi
                   <br> 
                   3. Peserta yang memenuhi persyaratan seleksi akan dipilih sebagai finalis dan berhak melanjutkan ke tahap berikutnya
                </p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-2">
        <div class="card">
            <div class="card-body">
                <h4>Pegumuman Peserta Dipilih</h4>
                <p>1. Pengumuman finalis akan dilakukan melalui email
                   <br> 
                   2. Finalis akan diinformasikan tentang jadwal presentasi dan persiapan yang diperlukan 
                   <br> 
                   3. Pada acara pengumuman pemenang, setiap finalis akan mempresentasikan rencana bisnis mereka di hadapan panel juri
                   <br> 
                   4. Setelah Presentasi, panel juri akan melakukan evalusi dan mengumumkan pemenang kompetisi business plan
                </p>
            </div>
        </div>
    </div>
    <!-- End Card Mekanisme -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">LATEST UPDATE</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="" alt="">
                            </div>
                            <h5 class="mb-3">Alpha JWC Ventures Suntikkan Dana Segar Kepada OnlinePajak dan Stoqo</h4>
                                <p class="mb-0">1 Hari yang lalu</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Startup Lifepack Rampungkan Pendanaan Seri A yang Dipimpin Golden Gate Ventures</h4>
                                <p class="mb-0">1 hari yang lalu</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-7.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Angel Investor Adalah? Berikut Jenis, Contoh dan Cara Mendapatkannya</h4>
                                <p class="mb-0">1 hari yang lalu</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Crowe Indonesia Gelar Diskusi terkait Valuasi Startup & Laporan ESG</h4>
                                <p class="mb-0">1 hari yang lalu</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative h-100">
                        <div class="service-text rounded p-5">
                            <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                                style="width: 64px; height: 64px;">
                                <img class="img-fluid" src="img/icon/icon-9.png" alt="Icon">
                            </div>
                            <h5 class="mb-3">Startup Fresh Factory Bangun Ratusan Gudang Dingin di 103 Kota</h4>
                                <p class="mb-0">1 hari yang lalu</p>
                        </div>
                        <div class="service-btn rounded-0 rounded-bottom">
                            <a class="text-primary fw-medium" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="d-flex align-items-center">
                    <a href="/home">
                        <h6 class="text-white">Detikfinance</h6>
                        <h4 class="text-white fw-bold">DETIKFINANCE BUSINESS PLAN</h4>
                        <h6 class="text-white fw-bold">COMPETITION 2023</h6>
                    </a>
                </div>
                    <p>Detikfinance memberikan ruang kepada para startup di Indonesia untuk menunjukkan, serta mempromosikan brand mereka
                        untuk mendapatkan perhatian dari venture capital atau angel investor
                    </p>
                    <div class="d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://web.facebook.com/detikcom/"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/detikcom/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.linkedin.com/company/detik-com/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                <hr>
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">2023 </a>Detikcom, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>