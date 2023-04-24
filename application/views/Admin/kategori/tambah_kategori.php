                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $title2; ?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 p-4 col-12 col-lg-8">
                                <form action="" method="post">
                                    <!-- nama kategori -->
                                    <div class="form-group">
                                        <label for="nama_kategori">Nama Kategori</label>
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Masukan nama kategori">
                                        <!-- notif error -->
                                        <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <!-- deskripsi -->
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                                        <!-- notif error -->
                                        <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <!-- button -->
                                    <button type="submit" class="btn btn-primary mt-4 float-right">Tambah</button>
                                    <a class="btn btn-danger mt-4 mr-3 float-right" href="<?=base_url('admin/kategori');?>" role="button">Batal</a>
                                    

                                </form>
                            </div>
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->


                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End Main Content -->