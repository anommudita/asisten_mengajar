                <!-- Main Content-->
                <div class="container-fluid">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $title2; ?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4 p-4 col-12 col-lg-8">
                                <?= form_open_multipart('admin/edit_kegiatan/' . $kegiatan1['id']); ?>
                                <!-- nama kegiatan -->
                                <div class="form-group">
                                    <label for="nama_kegiatan">Judul</label>
                                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukan judul kegiatan" value="<?= $kegiatan1['nama_kegiatan']; ?>">
                                    <!-- notif error -->
                                    <?= form_error('nama_kegiatan', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- kategori kegiatan -->
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control" id="kategori" name="kategori">

                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['name'] ?>" 
                                            <?php if ($kegiatan1['kategori'] == $k['name'] ) : ?> 
                                                selected 
                                            <?php endif; ?>>
                                            
                                            <?= $k['name'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <!-- Konten -->
                                <div class="form-group">
                                    <label for="content_text">Konten</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="Masukan deskripsi kegiatan" rows="10"><?= $kegiatan1['content']; ?></textarea>
                                    <!-- notif error -->
                                    <?= form_error('content', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>

                                <!-- gambar 1 -->
                                <div class=" form-group">
                                    <label for="gambar">Gambar 1</label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 pl-1">
                                                <img src="<?= base_url('assets/img/kegiatan/' . $kegiatan1['gambar1']); ?>" alt="image1" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9 pr-1">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image1" name="image1">
                                                    <label class="custom-file-label" for="image1">Pilih file..</label>
                                                    <small class="text-danger pl-3">Gambar tidak boleh kosong! dan format gambar png, jpeg, gif, dan heic</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- gambar 2 -->
                                <div class="form-group">
                                    <label for="gambar">Gambar 2</label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3 pl-1">
                                                <img src="<?= base_url('assets/img/kegiatan/' . $kegiatan1['gambar2']); ?>" alt="image2" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9 pr-1">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image2" name="image2">
                                                    <label class="custom-file-label" for="image2">Pilih file..</label>
                                                    <small class="text-danger pl-3">Gambar tidak boleh kosong! dan format gambar png, jpeg, gif, dan heic</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- button -->
                                <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
                                <a class="btn btn-danger mt-4 mr-3 float-right" href="<?= base_url('admin/kegiatan'); ?>" role="button">Batal</a>


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