    <!-- Breadcrumb Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <!-- Bread Title Start -->
                        <div class="bread-title">
                            <h1 class="title">Kegiatan</h1>
                        </div>
                        <!-- Bread Title End -->
                    </div>
                    <!-- breadcrumb Wrapper End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Start Here -->
    <div class="section blog-tab-section">
        <div class="container">
            <div class="row mt-n2">

                <!-- blog Menu Start -->
                <div class="messonry-button text-center mb-10" data-aos="fade-up" data-aos-delay="100">
                    <button data-filter="*" class="is-checked port-filter">Semua</button>
                    <?php foreach ($kategori as $kate) : ?>
                        <button data-filter=".cat-<?=$kate['id'] ?>" class="port-filter"><?= $kate['name'] ?></button>
                    <?php endforeach; ?>
                </div>
                <!-- blog Menu End -->

            </div>

            <div class="row row-cols-1 mesonry-list mb-n10">

                <div class="resizer col"></div>
                <?php foreach ($kegiatan as $k) : ?>
                    <!-- Single blog Start -->
                    <div class="col cat-<?= $k['id'] ?> mb-10">
                        <div class="single-blog-wrap">
                            <div class="blog-thumb">
                                <a class="image" href="<?= base_url('kegiatan_detail/' . $k['id']) ?>">
                                    <img class="fit-image" src="<?= base_url('/assets/img/kegiatan/' . $k['gambar1']) ?>" alt="blog Image">
                                </a>
                            </div>
                            <div class="inner-content">
                                <ul class="info-list">
                                    <li><?= $k['date']; ?></li>
                                    <li><?= $k['kategori'] ?></li>
                                </ul>
                                <h4 class="title"><a href="<?= base_url('kegiatan_detail/' . $k['id']) ?>"><?=$k['nama_kegiatan'] ?></a></h4>
                                <p><?= $k['content'] ?></p>
                                <a href="<?= base_url('kegiatan_detail/' . $k['id']) ?>" class="article">Lihat selengkapnya <span class="arrow icofont-rounded-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single blog End -->
                <?php endforeach; ?>
            </div>

            <div class="row section-padding">
                <div class="col-12">
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Section End Here -->