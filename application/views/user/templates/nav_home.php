<!-- Header Section Start -->
<div class="header header-transparent-bg section-fluid">

    <!-- Header Wrapper Start -->
    <div class="header-wrapper">
        <div class="header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-3 col-6">
                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="<?= base_url('user') ?>">
                                <img class="fit-image" src="<?= base_url('/assets/'); ?>img/logoundiksha.png" alt="Header Logo">
                            </a>
                        </div>
                        <!-- Header Logo End -->

                    </div>

                    <div class="col-lg-10 col-md-9 d-none d-md-block">

                        <!-- Main Menu Language Wrapper Start -->
                        <div class="main-menu-language-wrapper">

                            <!-- Main Menu Start -->
                            <nav class="main-menu main-menu-white">
                                <ul>
                                    <li>
                                        <a class="nav-text active-me" href="<?= base_url('') ?>">Beranda</a>
                                    </li>
                                    <li>
                                        <a class="nav-text" href="<?= base_url('kegiatan') ?>">Kegiatan</a>
                                    </li>
                                    <li>
                                        <a class="nav-text" href="<?= base_url('tentang') ?>">Tentang</a>
                                    </li>
                                    <li>
                                        <a class="nav-text" href="<?= base_url('tim') ?>">Tim</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- Main Menu End -->

                        </div>
                        <!-- Main Menu Language Wrapper End -->

                    </div>

                    <div class="col-lg-2 col-md-2 col-6">

                        <!-- Mobile Menu Hamburger Start -->
                        <div class="mobile-menu-hamburger mobile-menu-hamburger-black">
                            <a href="javascript:void(0)">
                                <!-- <span>Menu</span> -->
                                <i class="icon ion-android-menu dynamic-burger"></i>
                            </a>
                        </div>
                        <!-- Mobile Menu Hamburger End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu-wrapper">
        <div class="offcanvas-overlay"></div>

        <!-- Mobile Menu Inner Start -->
        <div class="mobile-menu-inner">
            <!-- Mobile Menu Inner Top Start -->
            <div class="mobile-menu-inner-top">

                <!-- Mobile Menu Logo Start  -->
                <div class="logo-mobile">
                    <img class="img" src="<?= base_url('/assets/'); ?>img/logoundiksha.png" alt="Logo">
                </div>
                <!-- Mobile Menu Logo End -->

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="icofont-close-line"></i>
                </div>
                <!-- Button Close End -->

            </div>
            <!-- Mobile Menu Inner Top End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-navigation">
                <nav>
                    <ul class="mobile-menu">
                        <li class="has-children">
                            <a href="<?= base_url('') ?>">Beranda</a>
                        </li>
                        <li class="has-children">
                            <a href="<?= base_url('activities') ?>">Kegiatan</a>
                        </li>
                        <li><a href="<?= base_url('about') ?>">Tentang</a></li>
                        <li><a href="<?= base_url('teams') ?>">Tim</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End -->
        </div>
        <!-- Mobile Menu Inner End -->
    </div>
    <!-- Mobile Menu End -->

</div>
<!-- Header Section End -->