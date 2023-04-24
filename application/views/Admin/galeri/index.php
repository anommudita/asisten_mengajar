                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $galeri; ?></h1>
                            <!-- DataTales Example -->

                            <!-- fitur searching -->
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="<?= base_url('admin/galeri') ?>" method="post">
                                        <div class="input-group mb-3">
                                            <input type="text" id="keyword_galeri" name="keyword_galeri" class="form-control" placeholder="Cari galeri..." autocomplete="off" autofocus>
                                            <div class="input-group-append">
                                                <input class="btn btn-primary" type="submit" name="submit"></input>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--End fitur searching  -->
                                <div class="col-md-4">
                                    <a href="<?= base_url('admin/tambah_galeri') ?>" class="btn btn-primary">Tambah</a>
                                </div>
                            </div>

                            <!-- Flashdata! -->
                            <?php if ($this->session->flashdata('flash')) : ?>
                                <div class="col">
                                    <div class="row mt-2">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data galeri
                                            <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- data kegiatan -->
                            <div class="row mx-1 mb-2">
                                <?php foreach ($galeri1 as $g) : ?>
                                    <div class="card shadow col-12 col-md-12 col-lg-3 my-2 mx-2 align-items-start">
                                        <img class="card-img-top mt-3" src="<?= base_url('assets/img/galeri/' . $g['gambar']) ?>" alt="Gambar">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $g['judul']; ?></h5>
                                            <!-- <p class="card-text"></p> -->
                                        </div>
                                        <div class="card-body">
                                            <a href="<?= base_url('admin/hapus_galeri/' . $g['id']); ?>" class="card-link text-danger delete-galeri" data-id="<?= $g['id']; ?>">Hapus</a>
                                            <a href="<?= base_url('admin/edit_galeri/' . $g['id']); ?>" class="card-link">Edit</a>

                                            <a href="#" class="card-link" data-toggle="modal" data-target=".bd-example-modal-lg-<?= $g['id'] ?>">Lihat</a>
                                            <div class="modal  fade bd-example-modal-lg-<?= $g['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content  ml-auto">
                                                        <div class="row">
                                                            <div class="col-sm-6 "><img src="<?= base_url('assets/img/galeri/' . $g['gambar']); ?>" alt="detailgambar"></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>



                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End Main Content -->