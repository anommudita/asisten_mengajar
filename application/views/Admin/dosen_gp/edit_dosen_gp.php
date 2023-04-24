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
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama lengkap" value="<?= $dosen_gp['nama']; ?>">
                                        <!-- notif error -->
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <!-- NIP -->
                                    <div class="form-group">
                                        <label for="nip">NIP</label>
                                        <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" value="<?= $dosen_gp['nip']; ?>">
                                        <!-- notif error -->
                                        <?= form_error('nip', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>


                                    <!-- Sebagai -->
                                    <div class="form-group">
                                        <label for="sebagai">Sebagai</label>
                                        <select class="form-control" id="sebagai" name="sebagai">
                                            <option value="Kepala Sekolah" 
                                            <?php if ($dosen_gp['sebagai'] == "Kepala Sekolah") : ?>
                                                selected 
                                            <?php endif; ?>>Kepala Sekolah</option>


                                            
                                            <option value="Guru Pamong Multimedia" <?php if ($dosen_gp['sebagai'] == "Guru Pamong Multimedia") : ?> selected <?php endif; ?>>Guru Pamong Multimedia</option>
                                            <option value="Guru Pamong RPL" <?php if ($dosen_gp['sebagai'] == "Guru Pamong RPL") : ?> selected <?php endif; ?>>Guru Pamong RPL</option>
                                            <option value="Guru Pamong TKJ" <?php if ($dosen_gp['sebagai'] == "Guru Pamong TKJ") : ?> selected <?php endif; ?>>Guru Pamong TKJ</option>
                                            <option value="Dosen Pembimbing 1" <?php if ($dosen_gp['sebagai'] == "Dosen Pembimbing 1") : ?> selected <?php endif; ?>>Dosen Pembimbing 1</option>
                                            <option value="Dosen Pembimbing 2" <?php if ($dosen_gp['sebagai'] == "Dosen Pembimbing 2") : ?> selected <?php endif; ?>>Dosen Pembimbing 2</option>
                                            <option value="Dosen Pembimbing 3" <?php if ($dosen_gp['sebagai'] == "Dosen Pembimbing 3") : ?> selected <?php endif; ?>>Dosen Pembimbing 3</option>
                                            <option value="Dosen Pembimbing 4" <?php if ($dosen_gp['sebagai'] == "Dosen Pembimbing 4") : ?> selected <?php endif; ?>>Dosen Pembimbing 4</option>
                                        </select>
                                    </div>

                                    <!-- button -->
                                    <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
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