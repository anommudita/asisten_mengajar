    <!-- Project Banner Section Start -->

    <div class="section">
        <div class="section position-relative overflow-hidden">

            <!-- Hero Slider Start -->
            <div class="hero-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Hero Slider Item Start -->
                        <div class="hero-slide-item swiper-slide">

                            <div class="bg"></div>
                            <!-- Hero Slider Bg Image Start -->
                            <div class="hero-slide-bg" id="intro-video">
                                <img class="img" src="<?= base_url('/assets/img/kegiatan/' . $kegiatan['gambar1']) ?>" alt="">
                            </div>
                        </div>

                        <div class="hero-slide-item swiper-slide">
                            <img src="<?= base_url('/assets/img/kegiatan/' . $kegiatan['gambar2']) ?>" alt="">
                        </div>

                        <div class="hero-slide-item swiper-slide">
                            <!-- Hero Slider Bg Image Start -->
                            <div class="hero-slide-bg" id="intro-video">
                                <iframe src="https://youtu.be/q7IKHvgiUvk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>

                    <!-- Swiper Pagination Start -->
                    <div class="swiper-pagination d-md-none"></div>
                    <!-- Swiper Pagination End -->

                    <!-- Swiper Navigation Start -->
                    <div class="home-slider-prev swiper-button-prev d-md-flex d-none"><i class="ion-ios-arrow-thin-left"></i></div>
                    <div class="home-slider-next swiper-button-next d-md-flex d-none"><i class="ion-ios-arrow-thin-right"></i></div>
                    <!-- Swiper Navigation End -->

                </div>
            </div>
        </div>
        <!-- Project Banner Section End -->

        <!-- Blog Details Content Section Start -->
        <div class="section section-padding-top section-padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-12 me-auto ms-auto">

                        <!-- Blog Details cntent Start -->
                        <div class="blog-details-content" data-aos="fade-up" data-aos-delay="300">

                            <div class="inner-container">

                                <!-- Page Breadcrumbs End -->

                                <!-- Title Start -->
                                <h1 class="title"><?= $kegiatan['nama_kegiatan'] ?></h1>
                                <!-- Title End -->

                                <!-- Info List Start -->
                                <ul class="info-list mb-5">
                                    <li><?= $kegiatan['date'] ?></li>
                                    <li><?= $kegiatan['kategori'] ?></li>
                                </ul>
                                <!-- Info List End -->

                                <!-- Big Text Start -->
                                <div class="col-12 text-break my-5">
                                    <?= $kegiatan['content'] ?>
                                </div>

                            </div>

                        </div>
                        <!-- Blog Details cntent End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Content Section End -->