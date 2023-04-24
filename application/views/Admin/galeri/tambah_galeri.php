                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3">Tambah <?=$galeri;?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 p-4 col-12 col-lg-8">
                            <?=form_open_multipart('admin/tambah_galeri') ?>
                                    <!-- nama kegiatan -->
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul">
                                        <!-- notif error -->
                                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small'); ?>
                                    </div>

                                    <!-- gambar -->
                                    <div class=" form-group">
                                        <label for="gambar1">Gambar</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-3 pl-1">
                                                    <img src="<?= base_url('assets') ?>/img/logoundiksha.png" alt="image1" class="img-thumbnail">
                                                </div>
                                                <div class="col-sm-9 pr-1">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                                        <label class="custom-file-label" for="gambar">Pilih file..</label>
                                                        <small class="text-danger pl-3">Gambar tidak boleh kosong! dan format gambar png, jpeg, gif, dan heic</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- button -->
                                    <button type="submit" class="btn btn-primary mt-4 float-right">Tambah</button>
                                    <a class="btn btn-danger mt-4 mr-3 float-right" href="<?= base_url('admin/galeri'); ?>" role="button">Batal</a>


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