<?= $this->extend('admin/header_footer'); ?>

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
                        <th>UAS</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>109283</td>
                        <td>Sandrian Yulian Firmansyah Noorihsan</td>
                        <td>1</td>
                        <td>69</td>
                        <td>62</td>
                        <td>71</td>
                        <td>58</td>
                        <td>
                            <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>56212</td>
                        <td>Hanifa Putri Rahima</td>
                        <td>1</td>
                        <td>76</td>
                        <td>85</td>
                        <td>90</td>
                        <td>89</td>
                        <td>
                            <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>56212</td>
                        <td>Alizza Iman R.</td>
                        <td>1</td>
                        <td>88</td>
                        <td>78</td>
                        <td>86</td>
                        <td>89</td>
                        <td>
                            <a class="btn btn-warning" href=""><span class="glyphicon glyphicon-edit" style="padding-right: 5px;"></span>Edit</a>
                            <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        <th>Tugas 1</th>
                        <th>Tugas 2</th>
                        <th>UTS</th>
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