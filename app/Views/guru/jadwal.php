<?= $this->extend('guru/header_footer'); ?>

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
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Kelas</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- jadwal senin -->
                    <tr>
                        <td>Senin</td>
                        <td>X MIPA 2</td>
                        <td>08:40</td>
                        <td>09:30</td>

                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>X MIPA 3</td>
                        <td>13:00</td>
                        <td>14:30</td>
                    </tr>
                    <!-- jadwal selasa -->
                    <tr>
                        <td>Senin</td>
                        <td>X MIPA 2</td>
                        <td>08:40</td>
                        <td>09:30</td>

                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>X MIPA 3</td>
                        <td>13:00</td>
                        <td>14:30</td>
                    </tr>
                    <!-- jadwal kamis -->
                    <tr>
                        <td>Kamis</td>
                        <td>X MIPA 2</td>
                        <td>08:40</td>
                        <td>09:30</td>

                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>X MIPA 3</td>
                        <td>13:00</td>
                        <td>14:30</td>
                    </tr>
                    <!-- jadwal jumat -->
                    <tr>
                        <td>Jumat</td>
                        <td>X MIPA 2</td>
                        <td>08:40</td>
                        <td>09:30</td>

                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>X MIPA 3</td>
                        <td>13:00</td>
                        <td>14:30</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Hari</th>
                        <th>Kelas</th>
                        <th>Jam Mulai</th>
                        <th>Jam Berakhir</th>
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