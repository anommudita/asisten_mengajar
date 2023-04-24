    <!-- Hero Section Start -->
    <div class="section position-relative overflow-hidden">

        <!-- Hero Slider Start -->
        <div class="">
            <div class="swiper-container">
                <div class="">

                    <!-- Hero Slider Item Start -->
                    <div class="hero-slide-item swiper-slide">

                        <div class="bg vw-100 overflow-hidden"></div>
                        <!-- Hero Slider Bg Image Start -->
                        <div class="hero-slide-bg vw-100" id="intro-video">
                            <video autoplay disablePictureInPicture muted loop>
                                <source src="<?= base_url('/assets/'); ?>/img/user/intro.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="container vw-100 d-flex align-items-center text-center justify-content-center">
                            <div class="hero-slide-content text-center">
                                <h2 class="title">
                                    Asisten Mengajar
                                </h2>
                                <h1 class="text-white jargon">#TetapSemangatLuarBiasa</h1>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Swiper Pagination Start -->
                <div class="swiper-pagination d-md-none"></div>
                <!-- Swiper Pagination End -->

            </div>
        </div>
        <!-- Hero Slider End -->

        <!-- Hero Slider Social Start -->
        <div class="hero-slider-social">

            <!-- Social Media Link Start -->
            <div class="social-media-link social-link-white">
                <a href="mailto:wigneswara.undiksha@gmail.com"><i class="fas fa-envelope"></i></a>
                <a href="https://www.instagram.com/wigneswara.undiksha/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCZfiR7n-ysynPCNW7qy8iig"><i class="fab fa-youtube"></i></a>
            </div>
            <!-- Social Media Link End -->

        </div>
        <!-- Hero Slider Social End -->

    </div>
    <!-- Hero Section End -->
    <div class="section section-padding-top overflow-hidden">
        <div class="container">
            <div class="row mb-n10 d-flex justify-content-between align-items-center">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title">Tim Asisten Mengajar Undiksha</h1>
                        <div class="history-content">
                            <h4 class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur tenetur, commodi autem veritatis fuga ipsam magnam suscipit dolorem voluptatem ipsa iusto aliquid ratione eligendi tempora culpa qui aperiam quibusdam possimus!</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus soluta provident labore animi mollitia ad iure quasi, non porro voluptates molestias nostrum fuga sit ducimus tempora impedit consectetur eveniet blanditiis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, autem maiores. Sunt labore consequuntur recusandae porro non commodi quisquam nobis debitis! Neque commodi molestias autem perspiciatis quasi tempore quod placeat!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="history-image d-flex justify-content-center">
                        <img class="fit-image inti-img" src="<?= base_url('/assets/'); ?>img/user/tim1.png" alt="tim">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-padding-top section-padding-bottom overflow-hidden">
        <div class="container">
            <div class="row mb-n10 flex-column-reverse flex-lg-row flex-md-row">
                <div class="col-lg-6 mb-10 col-md-12 order-2 order-lg-1 float-left" data-aos="fade-right" data-aos-delay="500">
                    <div class="history-image">
                        <img class="fit-image plane-img" src="<?= base_url('/assets/'); ?>img/user/tim2.png" alt="tim2">
                    </div>
                </div>
                <div class="col-lg-6 mb-10 col-md-12 align-self-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="500">
                    <div class="history-wrapper">
                        <h1 class="title">Penugasan Di SMK TI GLOBAL BALI SINGARAJA</h1>
                        <div class="history-content">
                            <h4 class="subtitle">Penugasa Asisten Mengajar</h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut voluptate illum temporibus, incidunt quaerat praesentium expedita quibusdam voluptatum quasi placeat quo, ducimus natus? Cumque ipsam, maxime hic doloribus minima ut?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Tab Section Start -->
    <div class="section  bg-light">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="300">
                <!-- Section Title Start -->
                <div class="col-xl-3 col-md-12">
                    <div class="section-title mb-5">
                        <h2 class="title text-center mb-5" style="text-align: left !important;">Galeri Kegiatan</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Tab Start -->
                <div class="col-xl-7 col-md-8 col-sm-12">

                    <!-- Section Title & Product Tab Start -->
                    <div class="section-tabs-header">

                    </div>
                    <!-- Section Title & Product Tab End -->
                </div>
                <!-- Tab End -->

            </div>
        </div>
        <div class="container-auto">
            <!-- Tab Content Start -->
            <div class="tab-content" data-aos="fade-up" data-aos-delay="400">
                <div class="tab-pane fade show active" id="tab-item-all">
                    <div class="tab-pane-carousel position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php foreach ($galeri as $g) : ?>
                                    <div class="swiper-slide">
                                        <!-- Single Project Slide Start -->
                                        <div class="single-project-slide">

                                            <!-- Thumb Start -->
                                            <div class="thumb">
                                                <div class="image">
                                                    <img class="fit-image gambar" src="<?= base_url('/assets/img/galeri/' . $g['gambar']); ?>" alt="galeri" />
                                                </div>
                                            </div>
                                            <!-- Thumb End -->

                                            <!-- Content Start -->
                                            <div class="content">
                                                <h4 class="subtitle">Galeri</h4>
                                                <h3 class="title"><a href="progress.html"><?= $g['judul'] ?></a></h3>
                                            </div>
                                            <!-- Content End -->

                                        </div>
                                        <!-- Single Project Slide End -->
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-item-architecture">
                    <div class="tab-pane-carousel-two position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="progress.html" class="image">
                                                <img class="fit-image" src="assets/images/gallery/abu-abu.jpg" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Residential</h4>
                                            <h3 class="title"><a href="progress.html">Cubic Villa</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="progress.html" class="image">
                                                <img class="fit-image" src="assets/images/gallery/abu-abu.jpg" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Architecture</h4>
                                            <h3 class="title"><a href="progress.html">Culture House</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="progress.html" class="image">
                                                <img class="fit-image" src="assets/images/gallery/abu-abu.jpg" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Commercial</h4>
                                            <h3 class="title"><a href="progress.html">ABC Financial Bank</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Single Project Slide Start -->
                                    <div class="single-project-slide">

                                        <!-- Thumb Start -->
                                        <div class="thumb">
                                            <a href="progress.html" class="image">
                                                <img class="fit-image" src="assets/images/gallery/abu-abu.jpg" alt="Product" />
                                            </a>
                                        </div>
                                        <!-- Thumb End -->

                                        <!-- Content Start -->
                                        <div class="content">
                                            <h4 class="subtitle">Interior</h4>
                                            <h3 class="title"><a href="progress.html">B6-No.5 OLA Tower</a></h3>
                                        </div>
                                        <!-- Content End -->

                                    </div>
                                    <!-- Single Project Slide End -->
                                </div>

                            </div>

                            <!-- Swiper Pagination Start -->
                            <div class="swiper-pagination d-none"></div>
                            <!-- Swiper Pagination End -->

                            <!-- Swiper Navigation Start -->
                            <div class="tab-carousel-prev swiper-button-prev"><i class="icofont-thin-left"></i></div>
                            <div class="tab-carousel-next swiper-button-next"><i class="icofont-thin-right"></i></div>
                            <!-- Swiper Navigation End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tab Content End -->
        </div>
    </div>
    <!-- Project Tab Section End -->