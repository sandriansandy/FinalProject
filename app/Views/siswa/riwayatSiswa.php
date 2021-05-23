<?= $this->extend('siswa/header_footer'); ?>

<?= $this->section('content'); ?>
<!--    MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <p class="lead">Riwayat Pengajuan Siswa</p>
                </div>
            </div>
            <table id="example" class="table table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Siswa</th>
                        <th>Tipe Pengajuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($layanan as $l) : ?>
                        <tr>
                            <td><?= $l['tanggal']; ?></td>
                            <td><?= $l['Nama']; ?></td>
                            <td><?= $l['jenis_berkas']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Siswa</th>
                        <th>Tipe Pengajuan</th>
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
        $('#example').DataTable({
            pageLength: 10,
            filter: true,
            deferRender: true,
            scrollY: 200,
            scrollCollapse: true,
            scroller: true
        });
    });
</script>
<?= $this->endSection('content'); ?>