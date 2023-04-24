                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                                <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Card Kegiatan -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kegiatan</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countallkegiatan; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-calendar-plus fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Team -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Tim</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countallteam; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Galeri -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-danger shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Galeri</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countallgaleri; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-images fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card Kategori -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kategori</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countallkategori; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-window-restore fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Row -->
                            <div class="row">


                                <div class="col-lg-6">

                                    <div class="row mx-1 mb-5">
                                        <div class="card shadow col-lg-5 mr-3 mb-3 align-items-start">
                                            <img class="card-img-top mt-3" src="<?= base_url('assets/img/logoundiksha.png') ?>" alt="Gambar">
                                            <div class="card-body">
                                                <h5 class="card-title">judul</h5>
                                                <!-- <p class="card-text"></p> -->
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Edit</a>

                                                <a href="#" class="card-link" data-toggle="modal" data-target=".bd-example-modal-lg-id">Lihat</a>
                                                <div class="modal  fade bd-example-modal-lg-id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content  ml-auto">
                                                            <div class="row">
                                                                <div class="col-sm-6 "><img src="#" alt="detailgambar"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card shadow col-lg-5 mb-3 align-items-start">
                                            <img class="card-img-top mt-3" src="<?= base_url('assets/img/logoundiksha.png') ?>" alt="Gambar">
                                            <div class="card-body">
                                                <h5 class="card-title">judul</h5>
                                                <!-- <p class="card-text"></p> -->
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Edit</a>

                                                <a href="#" class="card-link" data-toggle="modal" data-target=".bd-example-modal-lg-id">Lihat</a>
                                                <div class="modal  fade bd-example-modal-lg-id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content  ml-auto">
                                                            <div class="row">
                                                                <div class="col-sm-6 "><img src="#" alt="detailgambar"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card shadow col-lg-5 mb-3 align-items-start">
                                            <img class="card-img-top mt-3" src="<?= base_url('assets/img/logoundiksha.png') ?>" alt="Gambar">
                                            <div class="card-body">
                                                <h5 class="card-title">judul</h5>
                                                <!-- <p class="card-text"></p> -->
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="card-link">Edit</a>

                                                <a href="#" class="card-link" data-toggle="modal" data-target=".bd-example-modal-lg-id">Lihat</a>
                                                <div class="modal  fade bd-example-modal-lg-id" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content  ml-auto">
                                                            <div class="row">
                                                                <div class="col-sm-6 "><img src="#" alt="detailgambar"></div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Aturan Penggunaan</h6>
                                        </div>
                                        <div class="card-body">
                                            <p>Aturan sistem yang berlaku :</p>
                                            <ol>
                                                <li>Gunakan ukuran gambar dan video yang sama</li>
                                                <li>Gunakan gambar dengan ukuran yang dibawah 3Mb</li>
                                                <li>Jangan memuat ulang halaman ketika proses upload</li>
                                                <li>Setiap kolom form wajib diisi</li>
                                                <li>Pembaharuan gambar tidak diizinkan</li>
                                                <li>Pastikan penambahan anggota tim tidak duplikat</li>
                                                <li>Penambahan atau perbaharuan jabatan tidak diizinkan</li>
                                            </ol>
                                            <p>Catatan :</p>
                                            <p>Jangan lupa untuk memperbaharui aturan penggunaan ketika sistem diperbaiki atau diperbaharui.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End Main Content -->