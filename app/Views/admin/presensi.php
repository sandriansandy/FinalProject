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
                    <p class="lead">Data Presensi Siswa</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
                        <?php foreach ($absen as $p) : ?>
                            <tr>
                                <td><?= $p['Nama_mapel']; ?></td>
                                <td><?= $p['tanggal']; ?></td>
                                <td><?= $p['nama_kelas']; ?></td>
                                <td>
                                    <!-- <a class="btn btn-info" href="<?php base_url() ?>/admin/detailPresensi/<?= $p['id_presensi'] ?>"><span class="fa fa-info" style="padding-right: 5px;"></span>Detail</a> -->
                                    <a class="btn btn-danger" href="<?php base_url() ?>/admin/hapusPresensi/<?= $p['id_presensi'] ?>"><span class="glyphicon glyphicon-trash" style="padding-right: 5px;"></span>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Kode Mapel</th>
                            <th>Tanggal</th>
                            <th>Kelas</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h2>Tambah Presensi</h2>
                <form action="<?php base_url() ?>/admin/tambahPresensi" method="post" enctype="multipart/form-data">
                    <label for="Mapel">Kode Presensi</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input class="form-control" placeholder="Kode Presensi" type="text" id="id_presensi" name="kode" required>
                    </div>
                    <br>
                    <label for="Mapel">Jadwal</label>
                    <select class="form-control" name="jadwal">
                        <?php foreach ($jadwal as $j) : ?>
                            <option value="<?= $j['id_jadwal'] ?>"><?= $j['Nama_mapel'] ?> <?= $j['nama_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <label for="Mapel">Tanggal</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-book"></i></span>
                        <input class="form-control" placeholder="Tanggal" type="date" id="tanggal" name="tanggal" required>
                    </div>
                    <br>
                    <input type="submit" value="SUBMIT" class="btn btn-success">
                </form>
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