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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  

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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="/">
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
                        <a href="/register" class="nav-item nav-link active">Register</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Registrasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Field Start -->
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
            <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="name">
                                    <label for="name">Nama Perusahaan</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Email" placeholder="Email">
                                    <label for="Email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="" id="message" style="height: 200px"></textarea>
                                    <label for="message">Tentang Perusahaan Max.200 Character</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="file" class="form-control" id="upload" name="upload">
                                </div>
                                <label>Format file pdf, maksimal size 20mb</label>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="link" placeholder="Link Website">
                                    <label for="link">Link Website</label>
                                </div>
                                <label>Website, Sosial Media, dll. Sertakan protokol URL (https:// atau http://).</label>
                            </div>
                            <div class="">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                Dengan menekan tombol "Daftar", Saya menyetujui syarat dan ketentuan yang berlaku
                            </div>
                            <div class="col-16 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Field End -->

    
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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