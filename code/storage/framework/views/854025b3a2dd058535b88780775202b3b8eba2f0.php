
<?php $__env->startSection('css'); ?>
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

    .counts{
        margin-top: 50px;
    }

    a.getstarted:hover{
        color: black!important;
        background: white;
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                <img src="<?php echo e(asset('assets/techie/img/hero-1.png')); ?>" class="img-fluid animated" alt="">
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
                    
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 d-lg-flex d-lg-block d-none order-lg-1 content justify-content-center about-img"
                    data-aos="fade-left">
                    <img src="<?php echo e(asset('assets/techie/img/example-final.jpg')); ?>" draggable="false" class="img-fluid"
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
    
                    <div class="col-lg-4 col-12 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="75" data-purecounter-duration="1"
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

                <img src="<?php echo e(asset('assets/techie/img/struktur-stu-1.png')); ?>" id="structure-image" alt="" class="img-fluid">

            </div>
        </section><!-- End Testimonials Section -->
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portofolio</h2>
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
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas pengapalan\1.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas pengapalan\2.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas pengapalan\3.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas pengapalan\4.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-pengapalan">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas pengapalan\5.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\1.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\2.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\3.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\4.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\5.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\6.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\7.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\8.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-tambang">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\aktifitas tambang\9.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\1.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\2.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\3.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\4.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\5.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-kantor">
                    <div class="portfolio-wrap">
                        <img src="<?php echo e(asset('assets\techie\img\example\Operational Kantor & Work Shop\6.jpeg')); ?>" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>

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
                    <?php if(Session::has('status')): ?>
                        <div class="alert alert-success"><?php echo e(Session::get('status')); ?></div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('front.mail')); ?>" method="post" role="form" class="php-email-form">
                        <?php echo csrf_field(); ?>
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
                <h2>Our Partners</h2>
                <p>Kami juga bekerja sama dengan perusahaan perusahaan tambang khususnya nikel.</p>
            </div>

            <div class="row gy-4 owl-carousel">
                <?php $__currentLoopData = $patners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="height: 340px" class="d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="image-content">
                            <?php if(isset($patner->logo)): ?>
                            <img src="<?php echo e(asset( 'code/public/storage/patner_logo/' . $patner->logo)); ?>" width="230px"
                                alt="<?php echo e($patner->nama_perusahaan); ?>" srcset="">
                            <?php else: ?>
                            <img src="<?php echo e(asset('assets/techie/img/no-image.png')); ?>"
                                width="200px" alt="<?php echo e($patner->nama_perusahaan); ?>" srcset="">
                            <?php endif; ?>
                        </div>
                        <h4><a><?php echo e($patner->nama_perusahaan); ?></a></h4>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section><!-- End Services Section -->

</main><!-- End #main -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web-stu\code\resources\views/front/index.blade.php ENDPATH**/ ?>