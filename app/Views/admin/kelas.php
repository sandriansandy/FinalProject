<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <?php if (session()->getFlashdata('pesan')) { ?>
                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('pesan') ?></div>
            <?php } elseif (session()->getFlashdata('error')) { ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
            <?php } ?>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Data Kelas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Kelas</th>
                                <th>Tahun Ajaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kelas as $k) : ?>
                                <tr>
                                    <td><?= $k['id_kelas']; ?></td>
                                    <td><?= $k['nama_kelas']; ?></td>
                                    <td><?= $k['tahun_ajaran']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php base_url() ?> /admin/editKelas/<?= $k['id_kelas']; ?>"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                                        <a class="btn btn-danger" href="<?php base_url() ?> /admin/hapusKelas/<?= $k['id_kelas']; ?>"><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Kode Kelas</th>
                                <th>Kelas</th>
                                <th>Tahun Ajaran</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <?php if ($edit == null) { ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h2>Tambah Kelas</h2>
                        <form action="<?php base_url() ?>/admin/simpanKelas" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Kode Kelas" type="text" id="id_kelas" name="kode" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                <input class="form-control" placeholder="Nama Kelas" type="text" id="kelas" name="kelas" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" placeholder="Tahun Ajaran" type="text" id="tahun_ajaran" name="tahun_ajaran" required>
                            </div>
                            <br>
                            <input type="submit" value="SUBMIT" class="btn btn-success">
                        </form>
                    </div>
                <?php } else if ($edit != null) { ?>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h2>Edit Kelas</h2>
                        <form action="<?php base_url() ?>/admin/updateKelas/<?= $edit['id_kelas'] ?>" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                <input class="form-control" placeholder="Nama Kelas" type="text" id="kelas" name="kelas" value="<?= $edit['nama_kelas'] ?>" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input class="form-control" placeholder="Tahun Ajaran" type="text" id="tahun_ajaran" name="tahun_ajaran" value="<?= $edit['tahun_ajaran'] ?>" required>
                            </div>
                            <input type="hidden" name="kode" id="input" class="form-control" value="<?= $edit['id_kelas'] ?>">
                            <br>
                            <input type="submit" value="SUBMIT" class="btn btn-success">
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- Javascript -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="../assets/vendor/chartist/js/chartist.min.js"></script>
<script src="../assets/scripts/klorofil-common.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?= $this->endSection('content'); ?>