@extends('front.layouts.layouts')
@section('css')
<style>
    @media (max-width: 1400px) {
        #header .logo a {
            font-size: .9rem;
        }

        #header .logo {
            margin-right: 10px;
        }
    }

    @media (max-width: 572px){
        .section-title h2{
            font-size: 27px;
        }
    }

    .image-content {
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .services .icon-box {
        width: 350px !important;
    }

    .owl-item {
        display: flex;
        justify-content: center;
    }

    .border-marker h4{
        position: relative;
        margin: 5px 0 20px 60px!important;
    }

    .border-marker h4::after{
        content: ""; 
        position: absolute;
        left: 0;
        /* left: calc(50% - 15px); */
        background: #ffa20096;
        bottom: -8px;
        height: 4px;
        border-radius: 15px;
        width: 275px;
    }

    .manajemen-header::after{
        width: 150px!important;
    }
    

    .image-content img {
        width: 200px !important;
    }

    @media (max-width: 768px) {
        .about {
            padding: 10px 0;
        }

        .about .content h3 {
            padding-bottom: 15px;
        }
    }

    @media (max-width: 1200px) {
        .about-img img {
            width: 100% !important;
        }
    }

    @media(max-width: 992px){
        .counts{
            margin-top: 80px;
        }

        .about{
            padding: 50px 0!important;
        }

        .portfolio #portfolio-flters li{
            padding: 8px 4px;
            font-size: 13px;
        }

        #structure-image{
            margin-top: 40px;
        }

        .section-title{
            padding: 0;
        }
    }

    @media (min-width: 991px) and (max-width: 1200px) {
        #header .logo a {
            display: none;
        }
    }

</style>
@endsection
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>PT. SULAWESI TAMBANG UTAMA</h1>
                <h2>Kepercayaan , Citra dan Reputasi terbentuk dari profesionalisme sumber daya manusia serta fasilitas
                    pendukungnya</h2>

            </div>
            <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('assets/techie/img/hero-1.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->


<main id="main">

    <!-- ======= About Section ======= -->
    <section id="tentang-kami" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>Tentang Kami</h3>
                    <p class="fst-italic">
                        <span style="font-weight: bold">PT Sulawesi Tambang Utama</span> adalah perusahaan yang bergerak
                        di bidang jasa pertambangan (IUJP) di
                        Lingkungan Pertambangan Mineral dan Batubara.
                    </p>
                    <p>Untuk mencapai kenerja yang terbaik PT. Sulawesi Tambang Utama, memberikan komitmen sebagai
                        perusahaan yang berstandar local dan internasional, yang selalu berusaha untuk menjadi yang
                        terbaik dalam produk dan pelayanan.</p>
                    <p><b>PT Sulawesi Tambang Utama</b> mempunyai beberapa project Eksplorasi NIKEL yang berada di :</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Sulawesi Tengah
                        </li>
                        <li><i class="bi bi-check-circle"></i> Sulawesi Tenggara</li>
                        <li><i class="bi bi-check-circle"></i> Halmahera</li>
                    </ul>
                    {{-- <a href="#" class="read-more">Kontak Kami <i class="bi bi-long-arrow-right"></i></a> --}}
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 d-lg-flex d-lg-block d-none order-lg-1 content justify-content-center about-img"
                    data-aos="fade-left">
                    <img src="{{ asset('assets/techie/img/example-final.jpg') }}" draggable="false" class="img-fluid"
                        width="70%" alt="">
                </div>
            </div>

        </div>
        <section class="counts">
            <div class="container">
    
                <div class="row counters">
    
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clients</p>
                    </div>
    
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tambang</p>
                    </div>
    
                    <div class="col-lg-4 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="563" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pegawai</p>
                    </div>

                </div>
    
            </div>
        </section>
    </section><!-- End About Section -->


    <!-- ======= Dasar Hukum Section ======= -->
    <section id="dasar_hukum" class="features">
        <div class="container py-3" data-aos="fade-up">

            <div class="section-title">
                <h2>Dasar Hukum Manajemen Struktur Organisasi</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <div class="border-marker icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="manajemen-header">Manajemen</h4>
                        <p><b>Komisaris</b> : Buyung Hamzah<br><b>Direktur</b> : Ucok Wahyudi</p>
                        <h4 class="manajemen-header">Ijin Lokasi</h4>
                        <p>Beroperasi dalam ketentuan Pasal 19 dan Pasal 32 ayat (2) Peraturan pemerintah No 24 tahun 2018 yang diterbitkan pada tnggal 14 April 2021 dan berlaku untuk jangka waktu 3 tahun terhitung sejak tanggal penerbitan ijin lokasi berlaku efektif dengan luas 3500M2 dengan koordinat 2.3967235,75.013470; 6.4582625,107.21563313 Sulawesi Tengah Dan saat ini melakukan eksplorasi di  Sulawesi Tenggara dan Halmahera.</p>
                    </div>

                </div>
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="border-marker icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <h4>Dasar Hukum Pendirian</h4>
                        <p><b>PT. Sulawesi Tambang Utama</b> didirikan berdasarkan No. 25 tanggal 18 Januari 2021 yang dibuat di Notaris Dharma Budiman S.H, notaris publik di Surabaya.</p>
                        <div class="d-flex">
                            <p style="flex: 1">IUJP</p>
                            <p style="margin-left: 20px">:</p>
                            <p style="margin-left: 20px; flex: 5">No. 193/1/IUJP/PMDN/2021</p>
                        </div>
                        <div class="d-flex">
                            <p style="flex: 1">No. NIB</p>
                            <p style="margin-left: 20px">:</p>
                            <p style="margin-left: 20px; flex: 5">1209000112909</p>
                        </div>
                        <div class="d-flex">
                            <p style="flex: 1">NPWP</p>
                            <p style="margin-left: 20px">:</p>
                            <p style="margin-left: 20px; flex: 5">41.200.822.9-019.000</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
            <!-- ======= Testimonials Section ======= -->
            <section class="testimonials section-bg">
                <div class="container" data-aos="fade-up">
                    
                    <div class="section-title">
                        <h2>Struktur Organisasi</h2>
                        <p style="color: #196DAD"><b>STRUKTUR ORGANISASI PT.STU</b></p>
                </div>

                <img src="{{ asset('assets/techie/img/struktur-stu-1.png') }}" id="structure-image" alt="" class="img-fluid">

            </div>
        </section><!-- End Testimonials Section -->
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-tambang">Aktifitas Tambang</li>
                        <li data-filter=".filter-pengapalan">Aktifitas Pengapalan</li>
                        <li data-filter=".filter-kantor">Operational Kantor</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas pengapalan\1.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas pengapalan\2.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas pengapalan\3.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas pengapalan\4.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas pengapalan\5.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\1.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\2.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\3.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\4.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\5.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\6.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\7.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\8.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\aktifitas tambang\9.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\1.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\2.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\3.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\4.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\5.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets\techie\img\example\Operational Kantor & Work Shop\6.jpeg') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    {{-- <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <h3>Free</h3>
                        <h4><sup>$</sup>0<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="box featured">
                        <h3>Business</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <h3>Developer</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <span class="advanced">Advanced</span>
                        <h3>Ultimate</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                            data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                                curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus
                                non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec
                                pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus
                                turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit?
                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum
                                tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem
                            et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                                ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit
                                adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                            data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                            vel pharetra vel turpis nunc eget lorem dolor? <i
                                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hubungi Kami</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="info-box mb-4" style="padding: 20px 0 10px 0!important">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Desa Ganda-Ganda Dusun/Kelurahan Bahoue, Kec Petasia, Kab Morowali Utara, Sulawesi Tengah - 94971</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>sulawesi.tambangutama@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+62 812 3336 2166</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5724320552067!2d121.30013771467104!3d-1.9225405985983426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8fe97ef53227e5%3A0x6d7ccd3cd971dc6b!2sPT.%20Sulawesi%20Tambang%20Utama!5e0!3m2!1sid!2sid!4v1675240029671!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Services Section ======= -->
    <section id="our_patner" class="services section-bg">
        <div data-aos="fade-up">

            <div class="section-title">
                <h2>Our Patners</h2>
                <p>Kami juga bekerja sama dengan perusahaan perusahaan tambang khususnya nikel.</p>
            </div>

            <div class="row gy-4 owl-carousel">
                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/sumber-swara-logo.png') }}" width="230px"
                                alt="PT-Sumber-Swara-Pratama" srcset="">
                        </div>
                        <h4><a>PT Sumber Swarna Pratama</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/smub-logo.png') }}"
                                style="width: 220px!important" alt="PT-Sulawesi-Mineral-Bersama" srcset="">
                        </div>
                        <h4><a>PT. Sulawesi Mineral Bersama</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/satya-karya-mineral-logo.png') }}"
                                width="250px" alt="PT-Satya-Karya-Mineral" srcset="">
                        </div>
                        <h4><a>PT. Satya Karya Mineral</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/no-image.png') }}"
                                width="200px" alt="PT-Satya-Karya-Mineral" srcset="">
                        </div>
                        <h4><a>PT. Sihairong Mining International</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/guoneng-mining-logo.png') }}"
                                style="width: 180px!important" alt="PT-Guoneng-Mining-Investment" srcset="">
                        </div>
                        <h4><a>PT. Guoneng Mining Investment</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/jin-gili-logo.png') }}"
                                style="width: 190px!important" alt="PT-Jin-Gili-International" srcset="">
                        </div>
                        <h4><a>PT. Jin Gili International</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/bsp-logo.png') }}"
                                style="width: 230px!important" alt="PT-Borneo-Samudra-Perkasa" srcset="">
                        </div>
                        <h4><a>PT. Borneo Samudra Perkasa</a></h4>
                    </div>
                </div>

                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="image-content">
                            <img src="{{ asset('assets/techie/img/logo-patner/tigabeka-teknika-logo.png') }}"
                                width="200px" alt="PT-Tigabeka-Teknika" srcset="">
                        </div>
                        <h4><a>PT. Tigabeka Teknika</a></h4>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

@endsection

@section('script')
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            responsiveClass: true,
            margin: 30,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 6000,
            autoplaySpeed: 6000,
            responsive: {
                0: {
                    items: 1,
                    margin: 0,
                },
                600: {
                    items: 2,
                    margin: 15,
                },
                900: {
                    items: 3,
                    margin: 20,
                },
                1200: {
                    items: 4,
                    margin: 25,
                }
            }
        });
    })

</script>
@endsection
