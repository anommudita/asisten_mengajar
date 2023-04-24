<!-- Breadcrumb Section Start -->
<div class="section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- breadcrumb Wrapper Start -->
                <div class="breadcrumb-wrapper">
                    <!-- Bread Title Start -->
                    <div class="bread-title">
                        <h1 class="title">Tim Asisten Mengajar</h1>
                    </div>
                    <!-- Bread Title End -->
                </div>
                <!-- breadcrumb Wrapper End -->

            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="section team">
        <div class="form-group">
            <!-- <label for="exampleFormControlInput1"></label> -->
            <form action="<?=base_url('user/tim')?>" method="post">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="keyword_team" name="keyword_team" placeholder="Cari anggota tim...">
                    </div>
                    <div class="col-md-2">
                        <input class="btn btn-primary form-control"  type="submit" name="submit"></input>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-striped mt-5 mb-9" id="tableTeam">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Keahlian</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>

                <?php if (empty($tim)) : ?>
                    <tr>
                        <td colspan="7">
                            <div class="alert alert-danger" role="alert">
                                Data tidak ditemukan!
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php $i = 1; ?>
                <?php foreach ($tim as $t) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $t['name'] ?></td>
                        <td><?= $t['nim'] ?></td>
                        <td><?= $t['prodi'] ?></td>
                        <td><?= $t['jabatan'] ?></td>
                        <td><?= $t['keahlian'] ?></td>
                        <td><a href="#" class="btn btn-success mr-2" data-toggle="modal" data-target="#detailModal<?= $t['id']; ?>" id="tombol-detail">Detail</a></td>

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

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>