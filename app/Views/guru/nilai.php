<?= $this->extend('guru/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Data Nilai Siswa</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="/guru/tambahNilaiGuru" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        <th>Tugas 1</th>
                        <th>Tugas 2</th>
                        <th>UTS</th>
                        <th>Tugas 3</th>
                        <th>Tugas 4</th>
                        <th>UAS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($identitas as $n) : ?>
                        <tr>
                            <td><?= $n['NISN']; ?></td>
                            <td><?= $n['Nama']; ?></td>
                            <td><?= $n['Tugas 1']; ?></td>
                            <td><?= $n['Tugas 2']; ?></td>
                            <td><?= $n['UTS']; ?></td>
                            <td><?= $n['Tugas 3']; ?></td>
                            <td><?= $n['Tugas 4']; ?></td>
                            <td><?= $n['UAS']; ?></td>
                            <td>
                                <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        <th>Tugas 1</th>
                        <th>Tugas 2</th>
                        <th>UTS</th>
                        <th>Tugas 3</th>
                        <th>Tugas 4</th>
                        <th>UAS</th>
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