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
                                    <h6 class="m-0 font-weight-bold text-primary">Data dosen dan guru pamong</h6>
                                    <a href="<?= base_url('admin/tambah_dosen_gp') ?>" class="btn btn-primary">Tambah</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                            <!-- button search! -->
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="input-group mb-3">
                                                        <form action="" method="post">
                                                            <input type="text" class="form-control" name="keyword_dosen_gp" placeholder="Cari nama dosen atau guru pamong...">
                                                            <div class="input-group-append">
                                                                <input class="btn btn-primary" type="submit" name="submit"></input>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end button search! -->

                                            <!-- result data -->
                                            <h5>Hasil : <?= $all_dosen_gp; ?></h5>
                                            <!-- end result data -->

                                            <!-- Flashdata! -->
                                            <?php if ($this->session->flashdata('flash')) : ?>
                                                <div class="col">
                                                    <div class="row mt-2">
                                                        <div class="alert alert-success alert-dismissible fade show" role="alert">Data dosen dan guru pamong
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
                                                    <th>NIP</th>
                                                    <th>Sebagai</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>NIP</th>
                                                    <th>Sebagai</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php if(empty($dosen_gp)):?>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div class="alert alert-danger" role="alert">
                                                                Data tidak ditemukan!
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endif;?>
                                                <?php $i = 1; ?>
                                                <?php foreach ($dosen_gp as $dgp) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $dgp['nama']; ?></td>
                                                        <td><?= $dgp['nip']; ?></td>
                                                        <td><?= $dgp['sebagai'] ?></td>
                                                        <td>
                                                            <div class="d-flex flex-row">
                                                                <a href="<?= base_url() ?>admin/edit_dosen_gp/<?= $dgp['id']; ?>" class="btn btn-warning mr-2">Edit</a>
                                                                <a href="<?= base_url(); ?>admin/hapus_dosen_gp/<?= $dgp['id']; ?>" class="btn btn-danger delete-dosen-gp" data-id="<?= $dgp['id']; ?>">Hapus</a>
                                                            </div>
                                                        </td>
                                                    </tr>
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