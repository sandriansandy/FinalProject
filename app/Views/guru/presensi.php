<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Data Presensi Siswa</p>
                </div>
                <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="../admin/formTambah.html" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
                </div> -->
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Mata Pelajaran</th>
                        <th>Tanggal</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($presensi as $pg) : ?>
                        <tr>
                            <td><?= $pg['Nama_mapel']; ?></td>
                            <td><?= $pg['tanggal']; ?></td>
                            <td><?= $pg['nama_kelas']; ?></td>
                            <td>
                                <a class="btn btn-info" href="<?php base_url() ?>/guru/detailPresensi/<?= $pg['id_presensi'] ?>"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                                <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                                <a class="btn btn-danger" href="<?php base_url() ?>/guru/hapusPresensi/<?= $pg['id_presensi'] ?>"><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Mata Pelajaran</th>
                        <th>Tanggal</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
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