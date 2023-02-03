<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. SULAWESI TAMBANG UTAMA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/techie/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/techie/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/techie/img/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('assets/techie/img/favicon/site.webmanifest') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/techie/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/techie/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/techie/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/techie/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/techie/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets\techie\vendor\owl-carousel\owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/techie/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/techie/css/style.css') }}" rel="stylesheet">

  @yield('css')


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#" class="logo"><img src="{{ asset('assets/techie/img/logo-1.png') }}" alt="" class="img-fluid"></a>
      <h5 class="logo"><a href="#top">PT. SULAWESI TAMBANG UTAMA</a></h5>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#tentang-kami">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#dasar_hukum">Dasar Hukum</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="#our_patner">Our Patner</a></li>
          <li><a class="getstarted scrollto" href="{{ asset('assets/file/compro.pdf') }}" download>Company Profile</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <img src="{{ asset('assets/techie/img/logo-1.png') }}" class="img-fluid" width="75px" alt="">
            <h3 class="mt-3">PT. SULAWESI TAMBANG UTAMA</h3>
            <p>
              <strong>Phone:</strong> +62 812 3336 2166<br>
              <strong>Email:</strong> sulawesi.tambangutama@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <div class="d-flex justify-content-start">
              <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Portofolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Kantor Pusat</h4>
            <div class="d-flex mb-3">
              <i class="bi bi-geo-alt-fill" style="margin-top: 1px"></i>
              <p class="mx-1">Ruko Dutamas Fatmawati A1/38 Desa<br> Kelurahan Cipete Utara, Kec Kebayoran Baru, Kota Adm. Jakarta Selatan, Propinsi DKI Jakarta - 12150</p>
            </div>
            <h4>Lokasi Usaha</h4>
            <div class="d-flex">
              <i class="bi bi-geo-alt-fill" style="margin-top: 1px"></i>
              <p class="mx-1">Desa Ganda-Ganda<br> Dusun/Kelurahan Bahoue, Kec Petasia, Kab Morowali Utara, Sulawesi Tengah - 94971</p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright 2023 <strong><span>PT. STU</span></strong>.
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/techie/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/techie/js/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets\techie\vendor\owl-carousel\owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/techie/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/techie/js/main.js') }}"></script>

  @yield('script')

</body>

</html>