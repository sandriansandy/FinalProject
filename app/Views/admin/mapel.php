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
                    <p class="lead">Data Pelajaran</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mapel as $m) : ?>
                                <tr>
                                    <td><?= $m['id_mapel']; ?></td>
                                    <td><?= $m['Nama_mapel']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php base_url() ?> /admin/editMapel/<?= $m['id_mapel']; ?>"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                                        <a class="btn btn-danger" href="<?php base_url() ?> /admin/hapusMapel/<?= $m['id_mapel']; ?>"><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Kode Mapel</th>
                                <th>Nama Mapel</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <?php if ($edit == null) { ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h2>Tambah Mapel</h2>
                        <form action="<?php base_url() ?>/admin/simpanMapel" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Kode Mapel" type="text" id="id_mapel" name="id_mapel" required>
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                <input class="form-control" placeholder="Nama Mapel" type="text" id="Nama_mapel" name="Nama_mapel" required>
                            </div>
                            <br>
                            <input type="submit" value="SUBMIT" class="btn btn-success">
                        </form>
                    </div>
                <?php } else if ($edit) { ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <h2>Edit Mapel</h2>
                        <form action="<?php base_url() ?>/admin/updateMapel/<?= $edit['id_mapel'] ?>" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                <input class="form-control" placeholder="Nama Mapel" type="text" id="Nama_mapel" name="mapel" value="<?= $edit['Nama_mapel'] ?>" required>
                            </div>
                            <br>
                            <input type="hidden" name="kode" value="<?= $edit['id_mapel'] ?>">
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