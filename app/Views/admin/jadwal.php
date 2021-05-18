<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Data Pelajaran</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="tambahJadwal.html" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Guru</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>MIPA01</td>
                        <td>Matematika</td>
                        <td>Subur Budiman</td>
                        <td>XII Mipa 1</td>
                        <td>Senin</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>
                            <a class="btn btn-warning" href="editJadwal.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>

                    </tr>
                    <tr>
                        <td>IPS03</td>
                        <td>Agama Islam</td>
                        <td>Andi Susanto</td>
                        <td>XII IPS 3</td>
                        <td>Selasa</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>
                            <a class="btn btn-warning" href="editJadwal.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>IPS01</td>
                        <td>Penjasorkes</td>
                        <td>Eko Edi Susilo</td>
                        <td>XII IPS 1</td>
                        <td>Rabu</td>
                        <td>07:00</td>
                        <td>08:40</td>
                        <td>
                            <a class="btn btn-warning" href="editJadwal.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Kode Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Guru</th>
                        <th>Kelas</th>
                        <th>Hari</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
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