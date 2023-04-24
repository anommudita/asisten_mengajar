                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $title2; ?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 p-4 col-12 col-lg-8">
                                <!-- <form action="" method="post"> -->
                                <?= form_open_multipart('admin/edit_tim/' . $team['id']); ?>
                                <!-- nama lengkap -->
                                <div class="form-group">
                                    <label for="name">Nama lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $team['name'] ?>" placeholder="Masukan nama lengkap">
                                    <!-- notif error -->
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- NIM -->
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" value="<?= $team['nim'] ?>" placeholder="Masukan NIM">
                                    <!-- notif error -->
                                    <?= form_error('nim', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- Prodi -->
                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select class="form-control" id="prodi" name="prodi">

                                        <option value="PTI" <?php if ($team['prodi'] == "PTI") : ?> selected <?php endif; ?>>PTI
                                        </option>

                                        <option value="PTE" <?php if ($team['prodi'] == "PTE") : ?> selected <?php endif; ?>>PTE
                                        </option>
                                    </select>
                                </div>

                                <!-- Jabatan -->
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" id="jabatan" name="jabatan">
                                        <option value="Kordinator Sekolah" <?php if ($team['jabatan'] == "Kordinator Sekolah") : ?> selected <?php endif; ?>>Kordinator Sekolah</option>
                                        <option value="Anggota" <?php if ($team['jabatan'] == "Anggota") : ?> selected <?php endif; ?>>Anggota</option>
                                    </select>
                                </div>

                                <!-- Keahlian -->
                                <div class="form-group">
                                    <label for="keahlian">Keahlian</label>
                                    <select class="form-control" id="keahlian" name="keahlian">
                                        <option value="Multimedia" <?php if ($team['keahlian'] == "Multimedia") : ?> selected <?php endif; ?>>Multimedia</option>

                                        <option value="Rekayasa Perangkat Lunak" <?php if ($team['keahlian'] == "Rekayasa Perangkat Lunak") : ?> selected <?php endif; ?>>Rekayasa Perangkat Lunak</option>

                                        <option value="Elektro" <?php if ($team['keahlian'] == "Elektro") : ?> selected <?php endif; ?>>Elektro</option>
                                    </select>
                                </div>

                                <!-- Guru Pamong -->
                                <div class="form-group">
                                    <label for="keahlian">Guru Pamong</label>
                                    <select class="form-control" id="guru_pamong" name="guru_pamong">
                                        <option value="I Komang Lanang Oka Wiryawan, S.Pd." <?php if ($team['guru_pamong'] == "I Komang Lanang Oka Wiryawan, S.Pd.") : ?> selected <?php endif; ?>>I Komang Lanang Oka Wiryawan, S.Pd.</option>

                                        <option value="Dhruvayoti Tirthesvhara, S. Kom." <?php if ($team['guru_pamong'] == "Dhruvayoti Tirthesvhara, S. Kom.") : ?> selected <?php endif; ?>>Dhruvayoti Tirthesvhara, S. Kom.</option>

                                        <option value="I Komang Suka Wibawa" <?php if ($team['guru_pamong'] == "I Komang Suka Wibawa") : ?> selected <?php endif; ?>>I Komang Suka Wibawa</option>
                                    </select>
                                </div>

                                <!-- SosMed -->
                                <div class="form-group">
                                    <label for="sosmed">Sosial Media</label>
                                    <input type="text" class="form-control" id="sosmed" name="sosmed" placeholder="Masukan sosial media" value="<?= $team['sosmed'] ?>">
                                    <!-- notif error -->
                                    <?= form_error('sosmed', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- Gambar atau foto -->
                                <div class="form-group">
                                    <label for="gambar">Foto Profile</label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 pl-1">
                                                <img src="<?= base_url('assets') ?>/img/team/<?= $team['gambar']; ?>" alt="" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9 pr-1">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Pilih file..</label>
                                                    <small class="text-danger pl-3">Gambar tidak boleh kosong!</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- button -->
                                <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
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