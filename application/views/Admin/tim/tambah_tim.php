                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $title2; ?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 p-4 col-12 col-lg-8">

                                <!-- form untuk mengirimkan gambar! -->
                                <!-- <form action="" method="post"> -->
                                <?= form_open_multipart('admin/tambah_tim') ?>
                                <!-- nama lengkap -->
                                <div class="form-group">
                                    <label for="name">Nama lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama lengkap">
                                    <!-- notif error -->
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- NIM -->
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                                    <!-- notif error -->
                                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>


                                <!-- Prodi -->
                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select class="form-control" id="prodi" name="prodi">
                                        <option value="PTI">PTI</option>
                                        <option value="PTI">PTE</option>
                                    </select>
                                </div>

                                <!-- Jabatan -->
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" id="jabatan" name="jabatan">
                                        <option value="Kordinator Sekolah">Kordinator Sekolah</option>
                                        <option value="Anggota">Anggota</option>
                                    </select>
                                </div>

                                <!-- Keahlian -->
                                <div class="form-group">
                                    <label for="keahlian">Keahlian</label>
                                    <select class="form-control" id="keahlian" name="keahlian">
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Elektro">Elektro</option>
                                    </select>
                                </div>

                                <!-- Guru Pamong -->
                                <div class="form-group">
                                    <label for="guru_pamong">Guru Pamong</label>
                                    <select class="form-control" id="guru_pamong" name="guru_pamong">
                                        <option value="I Komang Lanang Oka Wiryawan, S.Pd.">I Komang Lanang Oka Wiryawan, S.Pd.</option>
                                        <option value="Dhruvayoti Tirthesvhara, S. Kom.">Dhruvayoti Tirthesvhara, S. Kom.</option>
                                        <option value="I Komang Suka Wibawa">I Komang Suka Wibawa</option>
                                    </select>
                                </div>

                                <!-- SosMed -->
                                <div class="form-group">
                                    <label for="sosmed">Sosial Media</label>
                                    <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Masukan sosial media">
                                    <!-- notif error -->
                                    <?= form_error('sosmed', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- Gambar atau foto -->
                                <div class="form-group">
                                    <label for="gambar">Foto Profile</label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 pl-1">
                                                <img src="<?= base_url('assets') ?>/img/logoundiksha.png" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9 pr-1">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Pilih file..</label>
                                                    <small class="text-danger pl-3">Gambar tidak boleh kosong! dan format gambar png, jpeg, gif, dan heic</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- button -->
                                <button type="submit" class="btn btn-primary mt-4 float-right">Tambah</button>
                                <a class="btn btn-danger mt-4 mr-3 float-right" href="<?= base_url('admin/tim'); ?>" role="button">Batal</a>

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