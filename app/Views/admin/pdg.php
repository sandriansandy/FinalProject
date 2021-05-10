<?= $this->extend('admin/header_footer'); ?>

<?= $this->section('content'); ?>
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">PAngkalan Data Guru</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="tambahGuru.html" class="btn btn-success" style="float: right;"><span class="fa fa-plus"></span> Tambah Data</a>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Tanggal Masuk</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>781253754775477747</td>
                        <td>Nugroho Dimas</td>
                        <td>Matematika</td>
                        <td>12-04-2015</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>981353754787477747</td>
                        <td>Santi Putri</td>
                        <td>Biologi</td>
                        <td>03-08-2017</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>561378554787477534</td>
                        <td>Saiful Yusuf</td>
                        <td>Penjaskes</td>
                        <td>15-07-2016</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6969696969696969696</td>
                        <td>Eko Suyanto Ericko</td>
                        <td>Pendidikan Agama Islam</td>
                        <td>22-09-2018</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>645637895092346782</td>
                        <td>Eddie Jalu Laksono</td>
                        <td>Sejarah</td>
                        <td>23-07-2016</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>984752928394282495</td>
                        <td>Agung Cahyo Nanda Subekti</td>
                        <td>Seni Budaya</td>
                        <td>11-12-2018</td>
                        <td>
                            <a class="btn btn-info" href="detailGuru.html"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a>
                            <a class="btn btn-warning" href="editGuru.html"><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Tanggal Masuk</th>
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