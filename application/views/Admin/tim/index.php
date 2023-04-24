                <!-- Main Content-->
                <div class="container-fluid" class="d-flex flex-column">

                    <div id="content">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <h1 class="h3 mb-2 text-gray-800 mt-2 mb-3"><?= $title2; ?></h1>
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data tim</h6>
                                    <a href="<?= base_url('admin/tambah_tim') ?>" class="btn btn-primary">Tambah</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <!-- button search! -->
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="input-group mb-3">
                                                        <form action="<?= base_url('admin/tim') ?>" method="post">
                                                            <input type="text" class="form-control" name="keyword_team" placeholder="Cari anggota tim..." autofocus>
                                                            <div class="input-group-append">
                                                                <input class="btn btn-primary" type="submit" name="submit"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end button search! -->

                                            <!-- result data -->
                                            <h5>Hasil : <?= $all_tim; ?></h5>
                                            <!-- end result data -->

                                            <!-- Flashdata! -->
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="col">
                                                    <div class="row mt-2">
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data tim
                                                            <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIM</th>
                                                    <th>Prodi</th>
                                                    <th>Jabatan</th>
                                                    <th>Keahlian</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIM</th>
                                                    <th>Prodi</th>
                                                    <th>Jabatan</th>
                                                    <th>Keahlian</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php if (empty($team)) : ?>
                                                    <tr>
                                                        <td colspan="7">
                                                            <div class="alert alert-danger" role="alert">
                                                                Data tidak ditemukan!
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                                <?php $i = 1; ?>
                                                <?php foreach ($team as $t) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $t['name']; ?></td>
                                                        <td><?= $t['nim']; ?></td>
                                                        <td><?= $t['prodi'] ?></td>
                                                        <td><?= $t['jabatan'] ?></td>
                                                        <td><?= $t['keahlian'] ?></td>
                                                        <td>
                                                            <div class="d-flex flex-row">
                                                                <a href="#" class="btn btn-success mr-2" data-toggle="modal" data-target="#detailModal<?= $t['id']; ?>" id="tombol-detail">Detail</a>
                                                                <a href="<?= base_url() ?>admin/edit_tim/<?= $t['id']; ?>" class="btn btn-warning mr-2">Edit</a>
                                                                <a href="<?= base_url(); ?>admin/hapus_tim/<?= $t['id']; ?>" class="btn btn-danger delete-tim" data-id="<?= $t['id']; ?>">Hapus</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- modal box -->
                                                    <div class="modal fade" id="detailModal<?= $t['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Tim</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-md-4 mt-3">
                                                                                <img src="<?= base_url('assets/img/team/') ?><?= $t['gambar']; ?>" class="img-fluid">
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <ul class="list-group">
                                                                                    <li class="list-group-item">
                                                                                        <h3><?= $t['name'] ?></h3>
                                                                                    </li>
                                                                                    <li class="list-group-item"> Jabatan : <?= $t['jabatan']; ?></li>
                                                                                    <li class="list-group-item"> NIM : <?= $t['nim']; ?></li>
                                                                                    <li class="list-group-item"> Prodi : <?= $t['prodi']; ?></li>
                                                                                    <li class="list-group-item"> Keahlian : <?= $t['keahlian']; ?></li>
                                                                                    <li class="list-group-item"> Guru Pamong : <?= $t['guru_pamong']; ?></li>
                                                                                    <li class="list-group-item"> Sosial Media : <?= $t['sosmed']; ?></li>
                                                                                </ul>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end modal box -->
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <?= $this->pagination->create_links(); ?>
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
                <!-- 
                <script>
                    $('#tombol-detail').on('click', function() {
                        var name = $(this).data('name');
                        var nim = $(this).data('nim');
                        var prodi = $(this).data('prodi');
                        var jabatan = $(this).data('jabatan');
                        var keahlian = $(this).data('keahlian');
                        var guru_pamong = $(this).data('guruGP');
                        var sosmed = $(this).data('sosmed');
                        var gambar = $(this).data('gambar');

                        $('#name').text(name);
                        $('#nim').text(nim);
                        $('#prodi').text(prodi);
                        $('#jabatan').text(jabatan);
                        $('#keahlian').text(keahlian);
                        $('#guruGP').text(guruGP);
                        $('#sosmend').text(sosmed);
                        $('gambar').text(gambar);

                        alert('test');

                    });
                </script> -->