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
                                    <!-- nama lengkap -->
                                    <div class="form-group">
                                        <label for="nama">Nama lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap">
                                        <!-- notif error -->
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <!-- NIP -->
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP">
                                        <!-- notif error -->
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>


                                    <!-- Sebagai -->
                                    <div class="form-group">
                                        <label for="sebagai">Sebagai</label>
                                        <select class="form-control" id="sebagai" name="sebagai">
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Guru Pamong Multimedia">Guru Pamong Multimedia</option>
                                            <option value="Guru Pamong RPL">Guru Pamong RPL</option>
                                            <option value="Guru Pamong TKJ">Guru Pamong TKJ</option>
                                            <option value="Dosen Pembimbing 1">Dosen Pembimbing 1</option>
                                            <option value="Dosen Pembimbing 2">Dosen Pembimbing 2</option>
                                            <option value="Dosen Pembimbing 3">Dosen Pembimbing 3</option>
                                            <option value="Dosen Pembimbing 4">Dosen Pembimbing 4</option>
                                        </select>
                                    </div>

                                    <!-- button -->
                                    <button type="submit" class="btn btn-primary mt-4 float-right">Tambah</button>
                                    <a class="btn btn-danger mt-4 mr-3 float-right" href="<?= base_url('admin/dosen_gp'); ?>" role="button">Batal</a>

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